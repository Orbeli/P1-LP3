<?php require_once 'layouts/base.php'; ?>

<!-- Content Section -->
<div class="content col-md-12">
    
    <div class="tabusers">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php for($i=0; $i <= 2; $i++){ ?>
                    <tr>
                        <td><?php echo 'Id ' . $i; ?></td>
                        <td><?php echo 'teste'; ?></td>
                        <td>
                            <a class="btnacao" href="/public/views/userdetails.php">
                                <i class="fas fa-users"></i>
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/prontuario.php">
                                <i class="fas fa-book-medical"></i>  
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="/public/views/prontuarioatendimento.php">
                                <i class="fas fa-notes-medical"></i>  
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="">
                                <i class="fas fa-user-edit"></i>  
                                <span class="sr-only">(current)</span>
                            </a>

                            <a class="btnacao" href="">
                                <i class="fas fa-trash-alt"></i> 
                                <span class="sr-only">(current)</span>
                            </a>

                        </td>
                    </tr>
                <?php } ?>                   
            </tbody>

        </table>

    </div>    
</div>

<!-- Includes footer and close html -->
<?php require_once 'layouts/footer.html'; ?>