<?php
//Expanse Internationalzation Language File - English : Docs 
//Version: 0.0.1

// Documentation : User Guide : Menu
$i8n['userguide_header']='User Guide';
$i8n['userguide_menu_install']='Installation';
$i8n['userguide_menu_backup']='Backing Up &amp; Restoring';
$i8n['userguide_menu_mining']='Mining Quick Start';
$i8n['userguide_menu_accounts']='Managing Accounts';
$i8n['userguide_menu_tx']='Sending Transactions';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='Installation';
$i8n['userguide_install_download_title']='Download';
$i8n['userguide_install_download_desc']='Download Expanse for your preferred platform';
$i8n['userguide_install_run_cmd_title']='Running Expanse - Command Line';
$i8n['userguide_install_run_desc']='Expanse can be run from the command line(gexp), or through a graphical wallet client(expwallet).';
$i8n['userguide_install_run_cmd']='To run gexp from the command line, navigate your console to the directory holding the gexp executable and run the gexp command.';
$i8n['userguide_install_args']='You may append various commands and option arguments to customize the expanse instance such as <code>console</code> (to launch with interactive javascript console), <code>--verbosity</code> (to increase the detail of output), or <code>--rpcport</code> (to specify RPC port). Detailed information on these arguements can be found on <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse Wiki : Command Line Options</a>.';
$i8n['userguide_install_example']='Example';
$i8n['userguide_install_attach']='To attach a console to an already running instance of gexp, include the argument &quot;attach&quot;.';
$i8n['userguide_install_rungui_title']='Running Expanse - EXPWallet GUI';
$i8n['userguide_install_rungui']='To run the expanse GUI,  simply run the expwallet executable. If you are already running an instance of gexp, running expwallet will attach itself to that instance. If you do not have an instance of gexp running, it will launch an internal instance of gexp.';
$i8n['userguide_install_firstrun_title']='First Run/Install';
$i8n['userguide_install_firstrun_desc']='The first time you run expanse, you will be prompted to agree to the user agreement. Expanse will check the default or specified datadir for pre-exsisting files, and if any are not found, it will create them.  It is suggested you now Create an Account if you have not done so.';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='Backing Up &amp; Restoring';
$i8n['userguide_backup_dataloc']='Data Location';
$i8n['userguide_backup_loc']='Wallets/Accounts are stored in the Keystore Folder inside Expanse\'s Data Directory.';
$i8n['userguide_backup_locos']='The location of this directory by default per OS:';
$i8n['userguide_backup_datadir']='It is possible to specify the directory with the <code>--datadir</code> parameter when launching the wallet. ';
$i8n['userguide_backup_wallet']='Wallet/Account Backup';
$i8n['userguide_backup_walletdesc']='To back up your wallet and accounts simply save a copy of the keystore folder(or its contents) to another location.';
$i8n['userguide_backup_restore']='Wallet/Account Restore';
$i8n['userguide_backup_restoredesc']='To restore your wallet,  copy the contents of your keystore backup to the keystore folder in the expanse data directory.';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='Mining Quick Start';
$i8n['userguide_mining_desc']='Mining can be done internally, or with third party tools.';
$i8n['userguide_mining_cpu']='CPU Mining with GEXP';
$i8n['userguide_mining_cpudesc']='You can initiate gexp with mining enabled by using the <code>--mine</code> argument when launching gexp. You may set the amount of cpu threads being utilized in mining with the <code>--minerthreads</code> argument';
$i8n['userguide_mining_cmd']='You may also start and stop the miner directly from the exp console with the miner.start and miner.stop commands.';
$i8n['userguide_mining_ethminer']='GPU Mining with Ethminer';
$i8n['userguide_mining_cors']='It is required that rpc is enabled and rpccorsdomain allows localdomain access.';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='Managing Accounts';
$i8n['userguide_accounts_create_title']='Creating a New Account';
$i8n['userguide_accounts_create_run']='To Create an account inside a running expanse console instance, run the command';
$i8n['userguide_accounts_create_desc']='To Create an account using gexp from your native console, run the command geth account new, and you will be prompted for a password.';
$i8n['userguide_accounts_create_warn']='This second method is not recommended since it may leave a record of your password in the console log.';
$i8n['userguide_accounts_delete_title']='Deleting an Account';
$i8n['userguide_accounts_delete_desc']='Accounts cannot be deleted from within the client or console. To Delete an account, delete the file associated with the account from your keystore folder. Be careful not to delete any other files. It is recommended to back up all keys created with your wallet. Please exercise extra caution to verify you only delete the keys you intend to.';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='Sending Transactions';
$i8n['userguide_sending_gexp_title']='Sending a Transaction from GEXP';
$i8n['userguide_sending_gexp_desc']='To send a transaction from gexp, use the console command exp.sendTransaction,  replacing the  from and to account addresses with the desired sender and recipient addresses respectively:';
$i8n['userguide_sending_gexp_example']='Example: Sending 1 EXP to account 0x00 from account 0x00.';
$i8n['userguide_sending_wallet_title']='Sending a Transaction from EXPWallet';
$i8n['userguide_sending_wallet_desc']='To send a transaction using expwallet, simply click the Transactions tab, select the address you would like to send from, enter the to address, amount(and gas, if desired) and cick Send.';
?>
