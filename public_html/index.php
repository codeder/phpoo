<?php

require_once 'inc/header.php';


/* Data Customers */
$customerdata = [
    new Customer("Eder", "eder@email.com", "999.999.999-99", "Cruzeiro", "SP", "Masculino"),
    new Customer("Luana", "luana@email.com", "888.888.888-88", "Lavrinhas", "SP", "Feminino"),
    new Customer("Roberto", "roberto@email.com", "777.777.777-77", "Volta Redonda", "RJ", "Masculino"),
    new Customer("Angela", "angela@email.com", "666.666.666-66", "Baependí", "MG", "Feminino"),
    new Customer("Ronaldo", "ronaldo@email.com", "555.555.555-55", "Cruzeiro", "SP", "Masculino"),
    new Customer("Sueli", "sueli@email.com", "444.444.444-44", "Lavrinhas", "SP", "Feminino"),
    new Customer("Renato", "renato@email.com", "333.333.333-33", "Cabo Frio", "RJ", "Masculino"),
    new Customer("Joaquim", "joaquim@email.com", "222.222.222-22", "Passa Quatro", "MG", "Masculino"),
    new Customer("José", "jose@email.com", "111.111.111-111", "Baependí", "MG", "Masculino"),
    new Customer("Elaine", "elaine@email.com", "000.000.000-000", "Cruzeiro", "SP", "Feminino")
];

/* Orderna o array de Clientes em ordem crescente ou decrescente de acordo com o parâmetro GET */
$order = array();
foreach ($customerdata as $i => $customer) {
    $order[$i] = $customer;
}

/* Verifica o parâmetro e alterna a ordem do array */
if ((isset($_GET['order'])) AND ( $_GET['order'] == "desc")) {
    array_multisort($order, SORT_DESC, $customerdata);
    $class = "/";
    $o = "&order=desc";
    $css = "glyphicon glyphicon-sort-by-alphabet";
} else {
    array_multisort($order, SORT_ASC, $customerdata);
    $class = "?order=desc";
    $o = "";
    $css = "glyphicon glyphicon-sort-by-alphabet-alt";
}

/* Objeto ListCustomers */
$customer = new ListCustomers();
?>


<?php

/* Listando todos os clientes */
if (!isset($_GET['id'])) {
    echo '<div class="page-header"><h1>Lista de clientes da empresa</h1></div>';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';

    echo "<th>Nome  <a style=\"margin-left:15px;\" href=\"{$class}\" class=\"glyphicon {$css} \"></a></th>";
    echo "<th>E-mail</th>";
    echo "<th>CPF</th>";
    echo "<th>Cidade</th>";
    echo "<th>Estado</th>";
    echo "<th>Sexo</th>";
    echo "</tr>";
    echo "</thead>";
    $cont = 1;
    foreach ($customerdata as $customer) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td><a href=\"?id={$cont}{$o}\">{$customer->name}</a></td>";
        echo "<td>{$customer->email}</td>";
        echo "<td>{$customer->cpf}</td>";
        echo "<td>{$customer->city}</td>";
        echo "<td>{$customer->uf}</td>";
        echo "<td>{$customer->gender}</td>";
        echo "</tr>";
        echo "</tbody>";
        $cont++;
    }
    echo '</table>';
} else {

    /* Mostra o cliente selecionado */
    $customer->GetShowCustomer($customerdata[$_GET['id'] - 1]);
    $customer->ShowCustomer();
}
?>

<?php require_once 'inc/footer.php'; ?>