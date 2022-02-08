<?php
class Connect
{
    private string $server;
    private string $user;
    private string $password;
    private string $db;

    /**
     * @return string
     */
    public function getServer(): string
    {
        return $this->server;
    }

    /**
     * @param string $server
     * @return Connect
     */
    public function setServer(string $server): Connect
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return Connect
     */
    public function setUser(string $user): Connect
    {
        $this->user = $user;
        return $this;
    }


    /**
     * @param mixed $password
     */
    public function setPassword($password): Connect
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getDb(): string
    {
        return $this->db;
    }

    /**
     * @param string $db
     * @return Connect
     */
    public function setDb(string $db): Connect
    {
        $this->db = $db;
        return $this;
    }

    public function __toString(): string {
        return $this->getDb() . $this->getServer() . $this->getUser();
    }
}
