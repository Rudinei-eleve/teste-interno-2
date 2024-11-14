<?php
// Caminho do repositório no servidor
$path = '/home/ku3na3il/public_html/teste-interno-2';  // Verifique o caminho correto
// Caminho para o arquivo dump do banco
$dump_file = '/home/ku3na3il/public_html/teste-interno-2/dump_do_banco.sql'; // Caminho onde o dump do banco está armazenado
// Credenciais do banco de dados
$db_user = 'root';  // Altere conforme necessário
$db_password = 'senha_do_banco';  // Altere conforme necessário
$db_name = 'nome_do_banco';  // Altere conforme necessário
chdir($path);
// Executa o git pull para obter as últimas mudanças do branch
$output = shell_exec('git pull origin master 2>&1');
echo "<pre>Git Pull Output:\n$output</pre>";
// Restaurar o banco de dados a partir do dump (se necessário)
if (file_exists($dump_file)) {
    // Restaura o banco de dados usando o dump
    $restore_command = "mysql -u $db_user -p$db_password $db_name < $dump_file";
    $restore_output = shell_exec($restore_command);
    echo "<pre>Banco de Dados Restaurado:\n$restore_output</pre>";
} else {
    echo "<pre>Arquivo de dump não encontrado. Nenhuma restauração realizada.</pre>";
}
// Exibe uma mensagem indicando que o deploy foi concluído
echo "<pre>Deploy Completo!</pre>";
?>