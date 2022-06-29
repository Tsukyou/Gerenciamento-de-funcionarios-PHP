<?php
    include_once("templates/header.php");
?>
    <div id="update-container">
        <h1 class="page-title">Adicione um novo funcionário no sistema</h1>
        <form id="update-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="update">
            <input type="hidden" name="id" value="<?= $collaborator["id"] ?>">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Digite o nome do colaborador" value="<?= $collaborator["name"]?>">
            </div>
            <div class="form-group">
                <label for="lastname">Sobrenome:</label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Digite o sobrenome" value="<?= $collaborator["lastname"]?>">
            </div>
            <div class="form-group">
                <label for="age">Idade:</label>
                <input class="form-control" type="text" name="age" id="age" placeholder="Insira a idade" value="<?= $collaborator["age"]?>">
            </div>
            <div class="form-group">
                <label for="sector">Setor:</label>
                <select class="form-control" name="sector" id="sector">
                    <option value="operacional">operacional</option>
                    <option value="admistrativo">admistrativo</option>
                    <option value="tecnologia da informação">tecnologia da informação</option>
                    <option value="financeiro">financeiro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="role">Cargo:</label>
                <input class="form-control" type="text" name="role" id="role" placeholder="Digite o cargo do colaborador" value="<?= $collaborator["role"]?>">
            </div>
            <div class="form-group">
                <label for="wage">Salário:</label>
                <input class="form-control" type="text" name="wage" id="wage" placeholder="Informe o salário" value="<?= $collaborator["wage"]?>">
            </div>
            <input type="submit" class="btn btn-secondary" value="Terminar edição">
        </form>
    </div>
<?php
    include_once("templates/footer.php");
?>