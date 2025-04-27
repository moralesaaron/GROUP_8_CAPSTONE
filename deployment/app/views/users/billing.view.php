<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Billing Dashboard with PayPal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script
    src="https://www.paypal.com/sdk/js?client-id=AdAq1pwyDVkBeJwB8DWdCZJv17PKhKu0Mnku0oWQ3qRGOP97xUGciPD91r0_TLqc6bjh5f3mJbtUlsiM&currency=USD"></script>
  <!-- Add jsPDF for PDF generation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
  <style>
    :root {
      --primary-color: rgb(252, 123, 3);
      --primary-light: rgb(248, 154, 12);
      --primary-dark: rgb(255, 136, 0);
      --secondary-color: rgb(255, 136, 0);
      --text-dark: #2c3e50;
      --text-light: #ffffff;
      --success: #2ecc71;
      --warning: #f1c40f;
      --danger: #e74c3c;
      --light-bg: #ecf0f1;
      --border-color: #bdc3c7;
      --card-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f5f7fa;
      color: var(--text-dark);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px;
    }

    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }

    .dashboard-title {
      color: var(--text-dark);
      font-size: 28px;
      font-weight: 600;
      position: relative;
      padding-bottom: 10px;
      margin: 0;
    }

    .dashboard-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background-color: var(--primary-color);
      border-radius: 2px;
    }

    .download-pdf-btn {
      background-color: rgb(255, 138, 5);
      color: white;
      border: none;
      padding: 12px 24px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 4px 10px rgba(52, 152, 219, 0.2);
    }

    .download-pdf-btn svg {
      width: 18px;
      height: 18px;
    }

    .download-pdf-btn:hover {
      background-color: rgb(252, 113, 0);
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(52, 152, 219, 0.3);
    }

    .billing-table {
      width: 100%;
      background-color: white;
      border-radius: 12px;
      box-shadow: var(--card-shadow);
      overflow: hidden;
      margin-bottom: 40px;
    }

    .table-header {
      background-color: var(--primary-color);
      color: var(--text-light);
      padding: 20px 25px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .table-header h2 {
      font-size: 20px;
      font-weight: 600;
    }

    .search-container {
      display: flex;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 30px;
      padding: 5px 15px;
      transition: all 0.3s ease;
    }

    .search-container:focus-within {
      background-color: white;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }

    .search-container input {
      border: none;
      outline: none;
      padding: 8px 10px;
      width: 220px;
      background-color: transparent;
      color: var(--text-light);
      font-size: 15px;
    }

    .search-container:focus-within input {
      color: var(--text-dark);
    }

    .search-container input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .search-container:focus-within input::placeholder {
      color: rgba(0, 0, 0, 0.4);
    }

    .search-icon {
      color: var(--text-light);
      font-size: 18px;
      margin-right: 5px;
    }

    .search-container:focus-within .search-icon {
      color: var(--primary-color);
    }

    .table-content {
      padding: 15px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 18px 20px;
      text-align: left;
      border-bottom: 1px solid var(--border-color);
    }

    th {
      font-weight: 600;
      color: #555;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    tbody tr {
      transition: all 0.2s ease;
    }

    tbody tr:hover {
      background-color: rgba(52, 152, 219, 0.05);
    }

    .status {
      padding: 6px 12px;
      border-radius: 30px;
      font-size: 13px;
      font-weight: 600;
      display: inline-block;
      text-align: center;
      min-width: 90px;
    }

    .status-paid {
      background-color: rgba(46, 204, 113, 0.15);
      color: var(--success);
    }

    .status-pending {
      background-color: rgba(241, 196, 15, 0.15);
      color: var(--warning);
    }

    .status-overdue {
      background-color: rgba(231, 76, 60, 0.15);
      color: var(--danger);
    }

    .action-btn {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      transition: all 0.3s;
      font-weight: 500;
    }

    .action-btn:hover {
      background-color: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .pagination-container {
      display: flex;
      justify-content: center;
      padding: 20px 0 30px;
    }

    .pagination {
      display: flex;
      justify-content: center;
      gap: 8px;
      padding: 15px 0;
    }

    .pagination-btn {
      border: 1px solid var(--border-color);
      background-color: white;
      width: 40px;
      height: 40px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.2s;
      color: var(--text-dark);
    }

    .pagination-btn:hover {
      border-color: var(--primary-color);
      color: var(--primary-color);
    }

    .pagination-btn.active {
      background-color: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
    }

    .payment-method-icon {
      font-size: 18px;
      margin-right: 8px;
      vertical-align: middle;
    }

    .payment-cash::before {
      content: "💵";
    }

    .payment-bank::before {
      content: "🏦";
    }

    .payment-card::before {
      content: "💳";
    }

    .payment-online::before {
      content: "🌐";
    }

    .no-results {
      padding: 40px;
      text-align: center;
      color: #777;
      font-size: 16px;
    }

    .hidden {
      display: none;
    }

    @media (max-width: 768px) {
      .container {
        padding: 15px;
      }

      .dashboard-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
      }

      .download-pdf-btn {
        width: 100%;
        justify-content: center;
      }

      .table-header {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
      }

      .search-container {
        width: 100%;
      }

      .search-container input {
        width: 100%;
      }

      th,
      td {
        padding: 12px 10px;
      }

      .table-responsive {
        overflow-x: auto;
      }
    }
  </style>
</head>

<body>
  <?php include __DIR__ . '/../partials/ownerheader.php'; ?>
  <div class="container">
    <div class="dashboard-header">
      <h1 class="dashboard-title">Billing Dashboard</h1>
      <button id="downloadPdfBtn" class="download-pdf-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
        </svg>
        Download Billing Report
      </button>
    </div>

    <div class="billing-table">
      <div class="table-header">
        <h2>Room/Unit Billings</h2>
        <div class="search-container">
          <span class="search-icon">🔍</span>
          <input type="text" id="searchInput" placeholder="Search rooms, amount, status...">
        </div>
      </div>

      <div class="table-content">
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Room/Unit</th>
                <th>Amount</th>
                <th>Due Date</th>
                <th>Payment Date</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="billingsTableBody">
              <tr data-room="Dorm A-101" data-amount="650" data-status="paid">
                <td>Dorm A-101</td>
                <td>$650</td>
                <td>May 01, 2025</td>
                <td>April 25, 2025</td>
                <td><span class="payment-method-icon payment-card"></span> Credit Card</td>
                <td><span class="status status-paid">Paid</span></td>
                <td><button class="action-btn">Complete</button></td>
              </tr>
              <tr data-room="Room B-205" data-amount="550" data-status="pending">
                <td>Room B-205</td>
                <td>$550</td>
                <td>May 05, 2025</td>
                <td>-</td>
                <td><span class="payment-method-icon payment-bank"></span> Bank Transfer</td>
                <td><span class="status status-pending">Pending</span></td>
                <td>
                  <div class="paypal-button-container" data-amount="550" data-room="Room B-205" id="paypal-B205">
                  </div>
                </td>
              </tr>
              <tr data-room="Unit C-310" data-amount="750" data-status="overdue">
                <td>Unit C-310</td>
                <td>$750</td>
                <td>April 25, 2025</td>
                <td>-</td>
                <td><span class="payment-method-icon payment-cash"></span> Cash</td>
                <td><span class="status status-overdue">Overdue</span></td>
                <td>
                  <div class="paypal-button-container" data-amount="750" data-room="Unit C-310" id="paypal-C310">
                  </div>
                </td>
              </tr>
              <tr data-room="Suite D-120" data-amount="900" data-status="pending">
                <td>Suite D-120</td>
                <td>$900</td>
                <td>May 10, 2025</td>
                <td>-</td>
                <td><span class="payment-method-icon payment-online"></span> Online</td>
                <td><span class="status status-pending">Pending</span></td>
                <td>
                  <div class="paypal-button-container" data-amount="900" data-room="Suite D-120" id="paypal-D120">
                  </div>
                </td>
              </tr>
              <tr data-room="Dorm B-112" data-amount="600" data-status="paid">
                <td>Dorm B-112</td>
                <td>$600</td>
                <td>May 01, 2025</td>
                <td>April 28, 2025</td>
                <td><span class="payment-method-icon payment-card"></span> Credit Card</td>
                <td><span class="status status-paid">Paid</span></td>
                <td><button class="action-btn">Complete</button></td>
              </tr>
              <tr data-room="Unit E-220" data-amount="850" data-status="overdue">
                <td>Unit E-220</td>
                <td>$850</td>
                <td>April 20, 2025</td>
                <td>-</td>
                <td><span class="payment-method-icon payment-cash"></span> Cash</td>
                <td><span class="status status-overdue">Overdue</span></td>
                <td>
                  <div class="paypal-button-container" data-amount="850" data-room="Unit E-220" id="paypal-E220">
                  </div>
                </td>
              </tr>
              <tr data-room="Room F-315" data-amount="700" data-status="pending">
                <td>Room F-315</td>
                <td>$700</td>
                <td>May 07, 2025</td>
                <td>-</td>
                <td><span class="payment-method-icon payment-bank"></span> Bank Transfer</td>
                <td><span class="status status-pending">Pending</span></td>
                <td>
                  <div class="paypal-button-container" data-amount="700" data-room="Room F-315" id="paypal-F315">
                  </div>
                </td>
              </tr>
              <tr data-room="Suite G-105" data-amount="950" data-status="paid">
                <td>Suite G-105</td>
                <td>$950</td>
                <td>May 03, 2025</td>
                <td>April 30, 2025</td>
                <td><span class="payment-method-icon payment-online"></span> Online</td>
                <td><span class="status status-paid">Paid</span></td>
                <td><button class="action-btn">Complete</button></td>
              </tr>
            </tbody>
          </table>
          <div id="noResults" class="no-results hidden">
            No billings match your search criteria.
          </div>
        </div>
      </div>

      <div class="pagination-container">
        <div class="pagination" id="pagination">
          <div class="pagination-btn" data-page="prev">&lt;</div>
          <div class="pagination-btn active" data-page="1">1</div>
          <div class="pagination-btn" data-page="2">2</div>
          <div class="pagination-btn" data-page="3">3</div>
          <div class="pagination-btn" data-page="next">&gt;</div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // PDF generation functionality
    document.getElementById('downloadPdfBtn').addEventListener('click', function () {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();

      // Add company logo/header
      doc.setFontSize(22);
      doc.setTextColor(252, 123, 3);
      doc.text('DORM MANAGEMENT SYSTEM', 14, 20);

      // Add report title
      doc.setFontSize(16);
      doc.setTextColor(44, 62, 80);
      doc.text('Billing Transactions Report', 14, 30);

      // Add date and report info
      doc.setFontSize(10);
      doc.setTextColor(100, 100, 100);
      const today = new Date();
      const formattedDate = today.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit'
      });
      doc.text('Generated on: ' + formattedDate, 14, 38);

      // Add horizontal line
      doc.setDrawColor(200, 200, 200);
      doc.line(14, 42, 196, 42);

      // Extract table data
      const tableData = [];
      const tableRows = Array.from(document.querySelectorAll('#billingsTableBody tr:not(.hidden)'));

      // Extract header
      const headers = ['Room/Unit', 'Amount', 'Due Date', 'Payment Date', 'Payment Method', 'Status'];

      // Extract row data
      tableRows.forEach(row => {
        const cells = Array.from(row.cells).slice(0, 6); // Exclude the Actions column
        const rowData = cells.map(cell => {
          // Remove emoji icons and return text content
          return cell.textContent.replace(/[\u{1F300}-\u{1F6FF}]/gu, '').trim();
        });
        tableData.push(rowData);
      });

      // Create the table
      doc.autoTable({
        head: [headers],
        body: tableData,
        startY: 48,
        styles: { fontSize: 10 },
        headStyles: {
          fillColor: [44, 62, 80],
          textColor: [255, 255, 255],
          fontStyle: 'bold'
        },
        alternateRowStyles: {
          fillColor: [245, 247, 250]
        },
        columnStyles: {
          0: { fontStyle: 'bold' },
          5: { // Status column
            cellCallback: function (cell, data) {
              const status = cell.raw.toLowerCase();
              if (status.includes('paid')) {
                cell.styles.textColor = [46, 204, 113];
                cell.styles.fontStyle = 'bold';
              } else if (status.includes('pending')) {
                cell.styles.textColor = [241, 196, 15];
                cell.styles.fontStyle = 'bold';
              } else if (status.includes('overdue')) {
                cell.styles.textColor = [231, 76, 60];
                cell.styles.fontStyle = 'bold';
              }
            }
          }
        },
        didDrawPage: function (data) {
          // Footer
          doc.setFontSize(8);
          doc.setTextColor(100, 100, 100);
          doc.text('Page ' + doc.internal.getNumberOfPages(), data.settings.margin.left, doc.internal.pageSize.height - 10);
          doc.text('Dorm Management System - Confidential', doc.internal.pageSize.width / 2, doc.internal.pageSize.height - 10, { align: 'center' });

          // Add horizontal line above footer
          doc.setDrawColor(200, 200, 200);
          doc.line(14, doc.internal.pageSize.height - 15, 196, doc.internal.pageSize.height - 15);
        }
      });

      // Add summary section
      const lastTableY = doc.lastAutoTable.finalY + 10;

      // Calculate totals
      let totalAmount = 0;
      let paidCount = 0;
      let pendingCount = 0;
      let overdueCount = 0;

      tableRows.forEach(row => {
        const amount = parseFloat(row.cells[1].textContent.replace('$', ''));
        const status = row.dataset.status;

        totalAmount += amount;
        if (status === 'paid') paidCount++;
        if (status === 'pending') pendingCount++;
        if (status === 'overdue') overdueCount++;
      });

      doc.setFontSize(12);
      doc.setTextColor(44, 62, 80);
      doc.text('Summary', 14, lastTableY);

      doc.setFontSize(10);
      doc.text('Total Amount: $' + totalAmount.toFixed(2), 14, lastTableY + 8);
      doc.text('Paid: ' + paidCount + ' transactions', 14, lastTableY + 16);
      doc.text('Pending: ' + pendingCount + ' transactions', 14, lastTableY + 24);
      doc.text('Overdue: ' + overdueCount + ' transactions', 14, lastTableY + 32);

      // Save the PDF
      doc.save('billing-transactions.pdf');
    });

    // PayPal integration
    document.querySelectorAll('.paypal-button-container').forEach(function (container) {
      const amount = container.dataset.amount;
      const room = container.dataset.room;

      paypal.Buttons({
        createOrder: function (data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: amount
              },
              description: "Payment for " + room
            }]
          });
        },
        onApprove: function (data, actions) {
          return actions.order.capture().then(function (details) {
            alert('Payment completed for ' + room);
            // Here you would typically update the UI or redirect
            location.reload(); // Simple refresh for demonstration
          });
        },
        onCancel: function () {
          alert('Payment was cancelled.');
        },
        onError: function (err) {
          console.error(err);
          alert('An error occurred with PayPal.');
        }
      }).render('#' + container.id);
    });

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const tableRows = document.querySelectorAll('#billingsTableBody tr');
    const noResults = document.getElementById('noResults');

    searchInput.addEventListener('input', function () {
      const searchTerm = this.value.toLowerCase();
      let hasVisibleRows = false;

      tableRows.forEach(row => {
        const room = row.dataset.room.toLowerCase();
        const amount = row.dataset.amount.toLowerCase();
        const status = row.dataset.status.toLowerCase();
        const rowText = row.textContent.toLowerCase();

        if (room.includes(searchTerm) || amount.includes(searchTerm) ||
          status.includes(searchTerm) || rowText.includes(searchTerm)) {
          row.classList.remove('hidden');
          hasVisibleRows = true;
        } else {
          row.classList.add('hidden');
        }
      });

      if (hasVisibleRows) {
        noResults.classList.add('hidden');
      } else {
        noResults.classList.remove('hidden');
      }
    });

    // Pagination functionality
    const itemsPerPage = 4;
    const paginationBtns = document.querySelectorAll('.pagination-btn');
    let currentPage = 1;

    function showPage(page) {
      const start = (page - 1) * itemsPerPage;
      const end = start + itemsPerPage;

      tableRows.forEach((row, index) => {
        if (index >= start && index < end) {
          row.classList.remove('hidden');
        } else {
          row.classList.add('hidden');
        }
      });

      // Update active pagination button
      paginationBtns.forEach(btn => {
        btn.classList.remove('active');
        if (btn.dataset.page == page) {
          btn.classList.add('active');
        }
      });
    }

    // Initialize pagination
    showPage(currentPage);

    // Add event listeners to pagination buttons
    paginationBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        const totalPages = Math.ceil(tableRows.length / itemsPerPage);

        if (this.dataset.page === 'prev') {
          if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
          }
        } else if (this.dataset.page === 'next') {
          if (currentPage < totalPages) {
            currentPage++;
            showPage(currentPage);
          }
        } else {
          currentPage = parseInt(this.dataset.page);
          showPage(currentPage);
        }
      });
    });
  </script>
</body>

</html>