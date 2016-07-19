<?php
//Expanse Internationalzation Language File - Simplified Chinese : Docs 
//Version: 0.0.0

// Documentation : User Guide : Menu
$i8n['userguide_header']='用户指南';
$i8n['userguide_menu_install']='安装';
$i8n['userguide_menu_backup']='备份 &amp; 恢复';
$i8n['userguide_menu_mining']='挖矿快速指南';
$i8n['userguide_menu_accounts']='管理账户';
$i8n['userguide_menu_tx']='发送交易';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='安装';
$i8n['userguide_install_download_title']='下载';
$i8n['userguide_install_download_desc']='为你偏爱的操作系统下载Expanse';
$i8n['userguide_install_run_cmd_title']='运行Expanse - 命令行';
$i8n['userguide_install_run_desc']='Expanse可以通过命令行运行(gexp)，也可以通过图形化钱包终端运行(expwallet)。';
$i8n['userguide_install_run_cmd']='要从命令行运行gexp，请将您的命令行终端切换至gexp可执行文件所在的文件夹，然后运行gexp命令。';
$i8n['userguide_install_args']='您可以附加不同的命令和可选参数来自定义expanse实例，例如<code>console</code> (打开交互式javascript终端)，<code>--verbosity</code> (增加详细输出)，或者<code>--rpcport</code> (指定RPC端口)。这些参数的详细信息请查看<a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse百科: 命令行选项</a>。';
$i8n['userguide_install_example']='示例';
$i8n['userguide_install_attach']='要将终端附加到一个正在运行中的gexp实例上，请附加参数&quot;attach&quot;。';
$i8n['userguide_install_rungui_title']='运行Expanse - 图形化EXP钱包';
$i8n['userguide_install_rungui']='要运行图形化EXP钱包，请直接运行expwallet可执行文件。如果您有正在运行的gexp实例，运行expwallet会附加到那个实例上。如果没有正在运行的exp实例，expwallet会自动运行一个exp的内部实例。';
$i8n['userguide_install_firstrun_title']='首次运行/安装';
$i8n['userguide_install_firstrun_desc']='第一次运行Expanse的时候，系统将提示您同意我们的用户协议。Expanse会在默认或指定的数据文件夹检查之前存在的账户文件，如果不存在这些文件那么系统会自动创建它们。如果您还没有账户，建议您现在就创建一个。';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='备份 &amp; 恢复';
$i8n['userguide_backup_dataloc']='数据位置';
$i8n['userguide_backup_loc']='钱包和账户数据都储存在Expanse数据文件夹下的Keystore子文件夹中。';
$i8n['userguide_backup_locos']='各操作系统下这个文件夹的默认位置:';
$i8n['userguide_backup_datadir']='可以在打开钱包时通过<code>--datadir</code>参数指定这个文件夹。';
$i8n['userguide_backup_wallet']='钱包/账户备份';
$i8n['userguide_backup_walletdesc']='要备份您的钱包和账户只需将keystore文件夹以及其中的文件拷贝到另一个位置即可。';
$i8n['userguide_backup_restore']='钱包/账户恢复';
$i8n['userguide_backup_restoredesc']='要恢复您备份的钱包，将备份的keystore文件夹中的文件拷贝到Expanse数据文件夹下的keystore子文件夹中即可。';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='挖矿快速指南';
$i8n['userguide_mining_desc']='您可以用内置的挖矿，也可以使用第三方工具。';
$i8n['userguide_mining_cpu']='用GEXP进行CPU挖矿';
$i8n['userguide_mining_cpudesc']='您可以在运行gexp的时候附加<code>--mine</code>参数来开启挖矿功能。用<code>--minerthreads</code>参数可以设置挖矿时占用的CPU线程数。';
$i8n['userguide_mining_cmd']='您也可以在exp终端用miner.start和miner.stop命令直接开始或停止挖矿。';
$i8n['userguide_mining_ethminer']='用Ethminer进行GPU挖矿';
$i8n['userguide_mining_cors']='这里需要开启rpc功能并且设置rpccorsdomain允许本地域可访问。';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='管理账户';
$i8n['userguide_accounts_create_title']='创建一个新账户';
$i8n['userguide_accounts_create_run']='要在运行中的Expanse客户端实例中创建新账户，请运行命令';
$i8n['userguide_accounts_create_desc']='要在您的系统终端用gexp创建新账户，运行命令geth account new，系统会提示您输入密码。';
$i8n['userguide_accounts_create_warn']='我们不建议您使用第二个方法，因为可能会在系统终端日志中记录下您的密码。';
$i8n['userguide_accounts_delete_title']='删除账户';
$i8n['userguide_accounts_delete_desc']='您无法通过客户端或终端删除账户。要删除账户请删除keystore文件夹中的相关文件。请注意不要删除其他文件。我们建议备份您用钱包创建的所有账户的密钥文件。请格外小心验证您只删除了想要删除的账户的密钥文件。';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='发送交易';
$i8n['userguide_sending_gexp_title']='用GEXP发送交易';
$i8n['userguide_sending_gexp_desc']='要用gexp发送交易，请使用客户端命令exp.sendTransaction，用您的发送和接收地址替换相应的from和to账户地址:';
$i8n['userguide_sending_gexp_example']='示例: 从账户0x00发送1 EXP到账户0x00。';
$i8n['userguide_sending_wallet_title']='用EXPWallet发送交易';
$i8n['userguide_sending_wallet_desc']='要用expwallet发送交易，只需点击交易标签，选择您要发送的账户地址，输入接收账户的地址、数量（可能还需要燃气），然后点击发送按钮。';
?>
