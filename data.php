<?php
$os = PHP_OS;
$hostname = gethostname();
$localIP = '127.0.0.1';
$publicIP = '0.0.0.0';
$servers = [
 'tp' => [
  'name' => 'TeamSpeak',
  'port' => '10080',
  'status' => 0
 ],
 'tps' => [
  'name' => 'TeamSpeak Secure',
  'port' => '10443',
  'status' => 0
 ],
 'mc' => [
  'name' => 'Minecraft',
  'port' => '25565',
  'status' => 0
 ],
 'bf2' => [
  'name' => 'Battlefield 2',
  'port' => '16567',
  'status' => 0
 ],
 'tr' => [
  'name' => 'Terraria',
  'port' => '6666',
  'status' => 0
 ],
 'cs' => [
  'name' => 'Counter Strike',
  'port' => '27015',
  'status' => 0
 ],
 'vnc' => [
  'name' => 'Virtual Network Computing',
  'port' => '33301',
  'status' => 4
 ],
 'rdp' => [
  'name' => 'Remote Desktop Protocol',
  'port' => '22201',
  'status' => 4
 ],
 'ftp' => [
  'name' => 'File Transfer Protocol',
  'port' => '21',
  'status' => 0
 ],
 'ssh' => [
  'name' => 'Secure Shell Tunnel',
  'port' => '22',
  'status' => 0
 ],
 'stmp' => [
  'name' => 'Simple Mail Transfer Protocol',
  'port' => '25',
  'status' => 4
 ],
 'stmps' => [
  'name' => 'Simple Mail Transfer Protocol Secure',
  'port' => '587',
  'status' => 4
 ],
 'dns' => [
  'name' => 'Domain Name System',
  'port' => '53',
  'status' => 4
 ],
 'pop3' => [
  'name' => 'Post Office Protocol',
  'port' => '110',
  'status' => 4
 ],
 'http' => [
  'name' => 'HyperText Transfer Protocol',
  'port' => '80',
  'status' => 0
 ],
 'http-alt' => [
  'name' => 'http-alt',
  'port' => '8080',
  'status' => 0
 ],
 'http-alt' => [
  'name' => 'http-alt',
  'port' => '8088',
  'status' => 0
 ],
 'http-alt' => [
  'name' => 'http-alt',
  'port' => '8000',
  'status' => 0
 ],
 'https' => [
  'name' => 'HyperText Transfer Protocol Secure',
  'port' => '443',
  'status' => 0
 ],
 'mysql' => [
  'name' => 'MySQL',
  'port' => '3306',
  'status' => 0
 ],
 'anydesk' => [
  'name' => 'Anydesk',
  'port' => '8888',
  'status' => 0
 ],
 'adb' => [
  'name' => 'Android Debug Bridge',
  'port' => '5555',
  'status' => 0
 ],
];
