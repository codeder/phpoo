<?php

class ListCustomers {

    public $get_customers = array();

    public function GetShowCustomer($data) {
        $this->show_customer[] = $data;
    }

    public function ShowCustomer() {

        if (isset($_GET['order'])) {
            $o = "?order=" . $_GET['order'];
        } else {
            $o = "";
        }

        foreach ((array) $this->show_customer as $customer) {
            echo '<div class="page-header"><h1>Dados do cliente</h1></div>';
            if ($customer) {
                echo '<table class="table table-striped">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Nome</th><th>E-mail</th><th>CPF</th><th>Cidade</th><th>Estado</th><th>Sexo</th>';
                echo '</tr>';
                echo "</thead>";
                echo "<tbody>";
                echo '<tr>';
                echo "<td>{$customer->getName()}</td>";
                echo "<td>{$customer->getEmail()}</td>";
                echo "<td>{$customer->getCpf()}</td>";
                echo "<td>{$customer->getCity()}</td>";
                echo "<td>{$customer->getUf()}</td>";
                echo "<td>{$customer->getGender()}</td>";
                echo '</tr>';
                echo "<tbody>";
                echo "</table>";
            } else {
                echo '<p style="padding:15px;" class="bg-danger">Cliente não encontrado</p>';
            }
            echo '<a href="/' . $o . '" class="btn btn-primary">Voltar</a>';
        }
    }

}
