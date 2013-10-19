<?php

use Symfony\Component\Yaml\Yaml;

class TokenPresenter {

    protected $Scope;
    protected $CallbackUrl;
    protected $CallbackBody;
    protected $ReturnUrl;
    protected $ReturnBody;
    protected $AsyncOps;
    protected $EndUser;
    protected $Expires;

    private $AccessKey;
    private $SecretKey;

    public function __construct()
    {
        //get bucket

        //mac default null

        $credential = Yaml::parse(app_path() . '/config/app.yml')['defaults']['qiniu'];

        $this->Scope = $credential['scope'];

        $this->AccessKey = $credential['ak'];
        $this->SecretKey = $credential['sk'];

    }

    public function generate()
    {
        $deadline = ($this->Expires ? $this->Expires : 3600) + time();

        $policy = array('scope'=>$this->Scope, 'deadline'=>$deadline);

        $data = $this->qn_encode(json_encode($policy));

        $sign = hash_hmac('sha1', $data, $this->SecretKey, true);

        return $this->AccessKey . ':' . $this->qn_encode($sign) . ':' . $data;

    }

    private function qn_encode($_str)
    {
        return str_replace(array('+', '/'), array('-', '_'), base64_encode($_str));
    }
}
