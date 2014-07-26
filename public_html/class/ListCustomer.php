<?php

class ListCustomers {

    public $get_customers = array();

    public function GetCustomers($data) {
        $this->get_customers[] = $data;
    }

    public function GetShowCustomer($data) {
        $this->show_customer[] = $data;
    }

    public function listCustomers() {
        $cont = 1;
        foreach ((array) $this->get_customers as $customer) {
            echo '<tr>';
            echo "<td>{$cont}</td><td><a href=\"?id={$cont}\">{$customer->getNome()}</a></td>";
            echo "<td>{$customer->getEmail()}</td>";
            echo "<td>{$customer->getCpf()}</td>";
            echo "<td>{$customer->getCity()}</td>";
            echo "<td>{$customer->getUf()}</td>";
            echo "<td>{$customer->getGender()}</td>";
            echo '</tr>';
            $cont++;
        }
    }

    public function ShowCustomer() {

        foreach ((array) $this->show_customer as $customer) {

            echo '<tr>';
            echo "<td>{$customer->getNome()}</td>";
            echo "<td>{$customer->getEmail()}</td>";
            echo "<td>{$customer->getCpf()}</td>";
            echo "<td>{$customer->getCity()}</td>";
            echo "<td>{$customer->getUf()}</td>";
            echo "<td>{$customer->getGender()}</td>";
            echo '</tr>';
        }
    }

}
