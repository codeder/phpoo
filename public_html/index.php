<?php

require_once 'class/Customer.php';
require_once 'class/ListCustomer.php';

/* Data Customers */
$customerdata[] = new Customer("Eder", "eder@email.com", "999.999.999-99", "Cruzeiro", "SP", "Masculino");
$customerdata[] = new Customer("Luana", "luana@email.com", "888.888.888-88", "Lavrinhas", "SP", "Feminino");
$customerdata[] = new Customer("Roberto", "roberto@email.com", "777.777.777-77", "Volta Redonda", "RJ", "Masculino");
$customerdata[] = new Customer("Angela", "angela@email.com", "666.666.666-66", "Baependí", "MG", "Feminino");
$customerdata[] = new Customer("Ronaldo", "ronaldo@email.com", "555.555.555-55", "Cruzeiro", "SP", "Masculino");
$customerdata[] = new Customer("Sueli", "sueli@email.com", "444.444.444-44", "Lavrinhas", "SP", "Feminino");
$customerdata[] = new Customer("Renato", "renato@email.com", "333.333.333-33", "Cabo Frio", "RJ", "Masculino");
$customerdata[] = new Customer("Joaquim", "joaquim@email.com", "222.222.222-22", "Passa Quatro", "MG", "Masculino");
$customerdata[] = new Customer("José", "jose@email.com", "111.111.111-111", "Baependí", "MG", "Masculino");
$customerdata[] = new Customer("Elaine", "elaine@email.com", "000.000.000-000", "Cruzeiro", "SP", "Feminino");

/* Prepare List Customers */
$customer = new ListCustomers();
$customer->GetCustomers($customerdata[0]);
$customer->GetCustomers($customerdata[1]);
$customer->GetCustomers($customerdata[2]);
$customer->GetCustomers($customerdata[3]);
$customer->GetCustomers($customerdata[4]);
$customer->GetCustomers($customerdata[5]);
$customer->GetCustomers($customerdata[6]);
$customer->GetCustomers($customerdata[7]);
$customer->GetCustomers($customerdata[8]);
$customer->GetCustomers($customerdata[9]);



/* List Customers */
if (!isset($_GET['id'])) {
    echo '<table border="1">';
    echo '<tr>';
    echo '<th>ID</th><th>Nome</th><th>E-mail</th><th>CPF</th><th>Cidade</th><th>Estado</th><th>Sexo</th>';
    echo '</tr>';
    $customer->listCustomers();
    echo '</table>';
} else {

    /* Show Customer */
    $customer->GetShowCustomer($customerdata[$_GET['id'] - 1]);
    $customer->ShowCustomer();
}
?>

