<?php
    include_once("templates/header.php");
?>
<main>
  <div id="content-container">
    <?php if(isset($sessionMsg) && $sessionMsg != ""): ?>
        <p class="print-msg"><?= $sessionMsg ?></p>
    <?php endif; ?>
    <h1 class="page-title">Gerenciamento de funcionários</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Idade</th>
                <th scope="col">Setor</th>
                <th scope="col">Cargo</th>
                <th scope="col">Salário</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($collaborators as $collaborator): ?>
                    <tr>
                        <td scope="row"><?= $collaborator["name"] ?></td>
                        <td scope="row"><?= $collaborator["lastname"] ?></td>
                        <td scope="row"><?= $collaborator["age"] ?></td>
                        <td scope="row"><?= $collaborator["sector"] ?></td>
                        <td scope="row"><?= $collaborator["role"] ?></td>
                        <td scope="row"><?= $collaborator["wage"] ?></td>
                        <td class="actions">
                            <form id="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $collaborator["id"] ?>">
                                <input type="submit" class="btn btn-outline-danger btn-sm btn-home" value="remover contato">
                            </form>
                            <a href="<?= $BASE_URL ?>EditCollaborator.php?id=<?= $collaborator["id"] ?>">
                                <button type="button" class="btn btn-outline-info btn-sm" value="Editar contato">Editar Contato</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</main>
<?php
    include_once("templates/footer.php");
?>
