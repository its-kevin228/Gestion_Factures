$(document).ready(function () {
    $('#jqtable').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
      },
      responsive: true,
      lengthMenu: [5, 10, 25],
      pageLength: 5,
      order: [[0, 'asc']],
    });
  });