<?php

class UsersModel extends DBClassModel
{
    protected $userName;
    protected $userEmail;
    protected $userPass;

    public function __construct($uN = 'DefaultN', $uE = 'DefaultE', $uP = 'DefaultP')
    {
        $this->userName = $uN;
        $this->userEmail = $uE;
        $this->userPass = $uP;
    }

    public function getDetails()
    {
        return $this->userName
            . ' are email = '
            . $this->userEmail
            . ' si parola = '
            . $this->userPass;
    }

    public function getUsers()
    {
        $q = "SELECT * FROM users";
        $result = $this->db()->query($q);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function delUser($id)
    {
        $q = "DELETE FROM `users` WHERE `ID`=$id";
        $result = $this->db()->query($q);
    }

    public function addUser($userName, $userPass)
    {
        $hashedPass = password_hash($userPass, PASSWORD_DEFAULT);
        $q = "INSERT INTO `users` (`userName`, `userPass`, `hashedPass`) VALUES (?,?,?)";

        $myPrep = $this->db()->prepare($q);

        $myPrep->bind_param("sss", $userName, $userPass, $hashedPass);
        $myPrep->execute();
    }
}
