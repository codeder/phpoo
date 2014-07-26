<?php

class ListCustomers {

    public $get_customers = array();

    public function GetShowCustomer($data) {
        $this->show_customer[] = $data;
    }

    public function ShowCustomer() {

        foreach ((array) $this->show_customer as $customer) {

            echo '<tr>';
            echo "<td>{$customer->getName()}</td>";
            echo "<td>{$customer->getEmail()}</td>";
            echo "<td>{$customer->getCpf()}</td>";
            echo "<td>{$customer->getCity()}</td>";
            echo "<td>{$customer->getUf()}</td>";
            echo "<td>{$customer->getGender()}</td>";
            echo '</tr>';
        }
    }

}
