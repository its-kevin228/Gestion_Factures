<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DataTables Example</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center">Gestion des Factures</h1>
        <table id="jqtable" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Client</th>
                    <th>Caissier</th>
                    <th>Montant</th>
                    <th>Perçu</th>
                    <th>Retourné</th>
                    <th>État</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 100; $i++) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>Client <?= $i ?></td>
                    <td>Caissier <?= $i ?></td>
                    <td><?= rand(1000, 5000) ?> FCFA</td>
                    <td><?= rand(500, 1000) ?> FCFA</td>
                    <td><?= rand(100, 500) ?> FCFA</td>
                    <td>Validé</td>
                    <td>
                        <button class="btn btn-info btn-sm" title="Voir">
                            <i class="fas fa-eye"></i> Voir
                        </button>
                        <button class="btn btn-warning btn-sm" title="Modifier">
                            <i class="fas fa-edit"></i> Modifier
                        </button>
                        <button class="btn btn-danger btn-sm" title="Supprimer">
                            <i class="fas fa-trash-alt"></i> Supprimer
                        </button>
                    </td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>
    <script>
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
    </script>
</body>
</html>
