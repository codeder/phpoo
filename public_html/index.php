<?php

require_once 'class/Customer.php';
require_once 'class/ListCustomer.php';

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


/* Orderna o array de Clientes em ordem crescente e decrescente */
$order = array();
foreach ($customerdata as $i => $customer) {
    $order[$i] = $customer;
}
array_multisort($order, SORT_ASC, $customerdata);



/* Objeto ListCustomers */
  $customer = new ListCustomers();


/* Listando todos os clientes */
if (!isset($_GET['id'])) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th><th>Nome</th><th>E-mail</th><th>CPF</th><th>Cidade</th><th>Estado</th><th>Sexo</th>';
    echo '</tr>';
    $cont = 1;
    foreach ($customerdata as $customer) {
        echo "<tr>";
        echo "<td>{$cont}</td>";
        echo "<td><a href=\"?id={$cont}\">{$customer->name}</a></td>";
        echo "<td>{$customer->email}</td>";
        echo "<td>{$customer->cpf}</td>";
        echo "<td>{$customer->city}</td>";
        echo "<td>{$customer->uf}</td>";
        echo "<td>{$customer->gender}</td>";
        echo "</tr>";
        $cont++;
    }
    echo '</table>';
} else {

    /* Mostra o cliente selecionado */
    $customer->GetShowCustomer($customerdata[$_GET['id'] - 1]);
    $customer->ShowCustomer();
}
?>

