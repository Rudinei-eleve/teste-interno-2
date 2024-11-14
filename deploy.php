<?php
// Caminho do repositório no servidor
$path = '/home/ku3na3il/public_html/teste-interno-2';  // Verifique o caminho correto
// Mude para o diretório do repositório
chdir($path);
// Executa o git pull para obter as últimas mudanças do branch
$output = shell_exec('git pull origin master 2>&1'); // Certifique-se de que o branch correto está sendo usado
echo "<pre>Git Pull Output:\n$output</pre>";
// Exibe uma mensagem indicando que o deploy foi concluído
echo "<pre>Deploy Completo!</pre>";
?>