<?php class AdminsController extends Controller implements crad
{
    public function get(): array
    {
        return parent::fatal_error();
    }

    public function post($infomation = null): array
    {
        if (parent::is_set($infomation)) {
            switch ($infomation) {
                case "seats":
                    return $this->getSeats();
                    break;
                case "reserves":
                    return $this->getReserves();
                    break;
                case "users":
                    return $this->getUsers();
                    break;
                default:
                    break;
            }
        }

        return parent::fatal_error();
    }

    public function put(): array
    {
        return parent::fatal_error();
    }

    public function delete(): array
    {
        return parent::fatal_error();
    }

    private function getSeats(): array
    {
        require_once(__DIR__ . "/../sql/Seats.php");

        $seats = parent::select(Seats::GetAll);
        return $seats ? $seats : parent::fatal_error();
    }

    private function getReserves(): array
    {
        require_once(__DIR__ . "/../sql/Reserves.php");

        $reserves = parent::select(Reserves::GetAll);
        return $reserves ? $reserves : parent::fatal_error();
    }

    private function getUsers(): array
    {
        require_once(__DIR__ . "/../sql/Users.php");

        $users = parent::select(Users::GetAll);
        return $users ? $users : parent::fatal_error();
    }
}
