<?php
//Expanse Internationalzation Language File - English : Docs 
//Version: 0.0.1

// Documentation : User Guide : Menu
$i8n['userguide_header']='Guia de Utilizador';
$i8n['userguide_menu_install']='Instalação';
$i8n['userguide_menu_backup']='Fazer Backup &amp; Restaurar';
$i8n['userguide_menu_mining']='Início Rápido de Mineração';
$i8n['userguide_menu_accounts']='Gestão de Contas';
$i8n['userguide_menu_tx']='Envio de Transações';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='Instalação';
$i8n['userguide_install_download_title']='Download';
$i8n['userguide_install_download_desc']='Faça Download do Expanse para a sua plataforma favorita';
$i8n['userguide_install_run_cmd_title']='Correr Expanse - Linha de Comandos';
$i8n['userguide_install_run_desc']='A Expanse pode ser executada a partir da linha de comando ( GExp ) , ou através de um cliente da carteira gráfica ( expwallet ).';
$i8n['userguide_install_run_cmd']='Para executar a gexp a partir da linha de comandos, navegue a sua consola para o diretório contendo o executável gexp e execute o comando gexp ';
$i8n['userguide_install_args']='Pode acrescentar vários comandos e argumentos de opção para personalizar a instância da expanse tais como < code> console</code> ( para lançar com consola javascript interactiva) , <code>--verbosity</code> (para aumentar o detalhe do output) ou <code>--rpcport</code> (para especificar porta RPC ) . Informações detalhadas sobre estes argumentos podem ser encontradas no <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Wiki da Expanse: Opções de Linha de Comandos </a>.';
$i8n['userguide_install_example']='Exemplo';
$i8n['userguide_install_attach']='Para anexar uma consola a uma instância já em execução do gexp , inclua o argumento &quot;attach&quot;.';
$i8n['userguide_install_rungui_title']='Correr Expanse - EXPWallet GUI';
$i8n['userguide_install_rungui']='Para executar a GUI da expanse , basta correr o arquivo executável expwallet . Se já está executando uma instância de gexp , ao executar expwallet, esta irá anexar-se a essa instância . Se não tem uma instância de gexp a correr, será lançada uma instância interna da gexp.';
$i8n['userguide_install_firstrun_title']='Primeira execução/Instalar';
$i8n['userguide_install_firstrun_desc']='A primeira vez que executar a expanse , será solicitado a concordar com o acordo do utilizador. A Expanse irá verificar o datadir padrão ou especificado em busca de arquivos pré- exsistentes, e se nenhum for encontrado, ela irá criá-los. É sugerido que crie uma conta agora, no caso de não o ter feito.';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='Fazer Backup &amp; Restaurar';
$i8n['userguide_backup_dataloc']='Localização de Dados';
$i8n['userguide_backup_loc']='As Carteiras/Contas são armazenadas na pasta Keystore dentro do diretório Expanse\'s Data Directory.';
$i8n['userguide_backup_locos']='A localização padrão desta pasta por OS:';
$i8n['userguide_backup_datadir']='It is possible to specify the directory with the <code>--datadir</code> parameter when launching the wallet. ';
$i8n['userguide_backup_wallet']='Fazer Backup da Carteira/Conta';
$i8n['userguide_backup_walletdesc']='Para fazer backup de sua carteira e contas basta guardar uma cópia da pasta de Keystore (ou seu conteúdo) noutro outro local.';
$i8n['userguide_backup_restore']='Restaurar Carteira/Conta';
$i8n['userguide_backup_restoredesc']='Para restaurar sua carteira, copie o conteúdo do seu backup do Keystore para a pasta de Keystore no diretório de dados da expanse.';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='Início Rápido de Mineração';
$i8n['userguide_mining_desc']='A mineração pode ser feita internamente , ou com ferramentas de terceiros.';
$i8n['userguide_mining_cpu']='Mineração GPU com GEXP';
$i8n['userguide_mining_cpudesc']='Pode iniciar gexp com a mineração habilitada usando o argumento <code>--mine</code> quando lançar o gexp . Você pode definir a quantidade de threads do CPU utilizadas na mineração com o argumento <code>--minerthreads</code>';
$i8n['userguide_mining_cmd']='Pode também iniciar e parar o miner diretamente na consola exp com os comandos miner.start e miner.stop.';
$i8n['userguide_mining_ethminer']='Mineração GPU com Ethminer';
$i8n['userguide_mining_cors']='É necessário que rpc esteja habilitado e que rpccorsdomain permita o acesso ao localdomain.';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='Gestão de Contas';
$i8n['userguide_accounts_create_title']='Criara uma Conta nova';
$i8n['userguide_accounts_create_desc']='Para criar uma conta usando gexp da sua consola nativa, execute o comando geth account new, e você será solicitada uma senha.';
$i8n['userguide_accounts_create_warn']='Este método não é recomendado , pois pode deixar um registro de sua senha no log da consola.';
$i8n['userguide_accounts_create_run']='Para criar uma conta dentro de uma instância da consola expanse em execução , execute o comando';
$i8n['userguide_accounts_delete_title']='Excluír uma conta';
$i8n['userguide_accounts_delete_desc']='As Contas não podem ser excluídas a partir do cliente ou da consola. Para excluir uma conta, apague o ficheiro associado à conta da sua pasta keystore. Tenha cuidado para não excluir quaisquer outros ficheiros. É recomendável fazer backup de todas as chaves criadas com sua carteira. Por favor tenha o cuidado extra de verificar que so está a apagar as chaves que você pretende excluír.';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='Envio de Transações';
$i8n['userguide_sending_gexp_title']='Envio de uma Transação a partir do GEXP';
$i8n['userguide_sending_gexp_desc']='Para enviar uma transação a partir do gexp, use o comando da consola exp.sendTransaction,  substituindo os endereços  de e para account addresses com o remetente e o destinatário desejado respectivamente:';
$i8n['userguide_sending_gexp_example']='Exemplo: Enviar 1 EXP para a conta 0x00 da conta 0x00.';
$i8n['userguide_sending_wallet_title']='Enviar uma Transação a partir da EXPWallet';
$i8n['userguide_sending_wallet_desc']='Para enviar uma transação usando a expwallet, basta clickar no separador das Transações, seleccione o endreço de onde quer enviar, intruduza o endreço do destinatário, montante(e gas, se desejar) e click Enviar.';
?>
