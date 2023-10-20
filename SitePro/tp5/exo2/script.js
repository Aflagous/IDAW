$(document).ready(function() {
    var table = $('#usersTable').DataTable({
        ajax: {
            url: 'http://localhost/IDAW/SitePro/tp4/API/users.php', // Remplacez ceci par l'URL de votre API
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'email' },
            {
                data: null,
                render: function(data) {
                    return '<button class="edit-btn" data-id="' + data.id + '">Modifier</button> <button class="delete-btn" data-id="' + data.id + '">Supprimer</button>';
                }
            }
        ]
    });

    $('#addUserForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: 'http://localhost/IDAW/SitePro/tp4/API/users.php',
            type: 'POST',
            data: formData,
            success: function(response) {
                alert(response.message); // Afficher un message de succès
                table.ajax.reload(); // Recharger les données dans le tableau après l'ajout
            },
            error: function(xhr, status, error) {
                alert("Erreur: " + xhr.responseText); // Afficher un message d'erreur en cas d'échec
            }
        });
    });

    $('#usersTable').on('click', '.edit-btn', function() {
        var userId = $(this).data('id');
        var userName = $(this).data('name');
        var userEmail = $(this).data('email');
    

        // Effectuer une autre requête AJAX pour mettre à jour l'utilisateur
        $.ajax({
            url: 'http://localhost/IDAW/SitePro/tp4/API/users.php?id=' + userId,
            type: 'PUT',
            data: JSON.stringify({ id: userId, name: userName, email: userEmail }),
            contentType: 'application/json',
            success: function(response) {
                alert(response.message);
                table.ajax.reload();
            },
            error: function(xhr, status, error) {
                alert("Erreur: " + xhr.responseText);
            }
        });
        
    });


  



    $('#usersTable').on('click', '.delete-btn', function() {
        var userId = $(this).data('id');
        $.ajax({
            url: 'http://localhost/IDAW/SitePro/tp4/API/users.php?id=' + userId,
            type: 'DELETE',
            success: function(response) {
                alert(response.message); // Afficher un message de succès
                table.ajax.reload(); // Recharger les données dans le tableau après la suppression
            },
            error: function(xhr, status, error) {
                alert("Erreur: " + xhr.responseText); // Afficher un message d'erreur en cas d'échec
            }
        });
    });
});
