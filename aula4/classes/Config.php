<?
$config = json_encode(array(
	"conexao1"=>array(
		"host"=>"127.0.0.1",
		"user"=>"root",
		"dbname"=>"microlins",
		"password"=>"123"
	),
	"conexao2"=>array(
		"host"=>"192.168.0.58",
		"user"=>"root",
		"dbname"=>"microlins_remoto",
		"password"=>"abc"
	)
));

$conf = json_decode($config);
$data = 'conexao1';

//$conn = $conf->{"conexao1"};
$conn = $conf->$data;
print_r($conn);

