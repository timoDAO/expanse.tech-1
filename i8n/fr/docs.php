<?php
//Expanse Internationalzation Language File - Français : Docs 
//Version: 1.1.1

// Documentation : User Guide : Menu
$i8n['userguide_header']='Guide utilisateur';
$i8n['userguide_menu_install']='Installation';
$i8n['userguide_menu_backup']='Sauvegarde &amp; Restauration';
$i8n['userguide_menu_mining']='Lancement rapide du Minage';
$i8n['userguide_menu_accounts']='Gestion des Comptes';
$i8n['userguide_menu_tx']='Envoyer des Transactions';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='Installation';
$i8n['userguide_install_download_title']='Télécharger';
$i8n['userguide_install_download_desc']='Téléchargez Expanse pour votre plateforme préférée';
$i8n['userguide_install_run_cmd_title']='Démarrage de Expanse - Ligne de Commande';
$i8n['userguide_install_run_desc']='Expanse peut être lancé depuis l\'invité de commande (gexp), ou par l\'intermédiaire dubportefeuille graphique (expwallet).';
$i8n['userguide_install_run_cmd']='Pour démarrer gexp depuis l\'invité de commande, placer votre console dans le répertoire contenant l\'exécutable gexp et lancer la commande gexp.';
$i8n['userguide_install_args']='Vous pouvez indexer plusieurs commandes et arguments d\'option afin de personnaliser l\'instance expanse, comme <code>console</code> (pour démarrer avec une console java interactive), <code>--verbosity</code> (pour les détails de la sortie), ou <code>--rpcport</code> (pour spécifier le port RPC). Des informations détaillées sur ces arguments peuvent être trouvées sur <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse Wiki : Options de ligne de commande</a>.';
$i8n['userguide_install_example']='Exemple';
$i8n['userguide_install_attach']='Pour attacher une console à une instance de gexp déjà en exécution (qui syncrhonise déjà la blockchain), inclure l\'argument &quot;attach&quot;.';
$i8n['userguide_install_rungui_title']='Démarrage de Expanse - EXPWallet GUI';
$i8n['userguide_install_rungui']='Pour démarrer l\'interface graphique utilisateur (GUI), lancez simplement l\'exécutable expwallet. Si une instance de gexp est déjà en cours d\'exécution, expwallet se rattachera automatiquement à cette instance. Si aucune instance de gexp n\'est déjà en cours d\'exécution, expwallet démarrera automatiquement une instance interne de gexp.';
$i8n['userguide_install_firstrun_title']='Premier Lancement/Installation';
$i8n['userguide_install_firstrun_desc']='La première fois que vous lancez expanse, il vous sera demandé d\'accepter les conditions utilisateur. Expanse vérifiera les chemins de données par défaut ou spécifiés, et les créera s\'ils ne sont pas trouvés. Vous pouvez alors Créer un Compte si vous ne l\'avez pas déjà fait.';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='Sauvegarde &amp; Restauration';
$i8n['userguide_backup_dataloc']='Emplacement des données';
$i8n['userguide_backup_loc']='Les Portefeuilles/Comptes sont stockés dans le Dossier Keystore à l\'intérieur du répertoire de données Expanse.';
$i8n['userguide_backup_locos']='Emplacement par défaut de ce répertoire:';
$i8n['userguide_backup_datadir']='Il est possible de spécifier un répertoire au lancement du portefeuille avec le paramètre <code>--datadir</code>.';
$i8n['userguide_backup_wallet']='Sauvegarde du Portefeuille/Compte';
$i8n['userguide_backup_walletdesc']='Pour sauvegarder votre portefeuille et vos comptes, il vous suffit de sauvegarder une copie du dossier Keystore (ou son contenu) dans un autre emplacement temporaire.';
$i8n['userguide_backup_restore']='Restauration du Portefeuille/Compte';
$i8n['userguide_backup_restoredesc']='Pour restaurer votre portefeuille, copiez le contenu de votre sauvegarde Keystore dans le dossier Keystore du répertoire de données Expanse.';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='Lancement rapide du Minage';
$i8n['userguide_mining_desc']='Il est possible de miner en interne ou en utilisant des outils tiers.';
$i8n['userguide_mining_cpu']='Minage CPU avec GEXP';
$i8n['userguide_mining_cpudesc']='Vous pouvez initialiser gexp avec minage activé en utilisant l\'argument <code>--mine</code> au lancement de gexp. Vous pouvez fixer le nombre de threads CPU à utiliser pour le minage avec l\'argument <code>--minerthreads</code>';
$i8n['userguide_mining_cmd']='Vous pouvez également démarrer et arrêter le minage directement depuis la console exp avec les commandes miner.start et miner.stop';
$i8n['userguide_mining_ethminer']='Minage GPU avec Ethminer';
$i8n['userguide_mining_cors']='Il est nécessaire que rpc soit activé et que rpccorsdomain autorise l\'accès à localdomain.';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='Gestion des Comptes';
$i8n['userguide_accounts_create_title']='Création d\'un Nouveau Compte';
$i8n['userguide_accounts_create_run']='Pour créer un compte dans une instance de la console expanse en cours d\'exécution, lancez la commande';
$i8n['userguide_accounts_create_desc']='Pour créer un compte en utilisant gexp depuis la console native, lancez la commande de nouveau compte geth, et un mot de passe vous sera demandé.';
$i8n['userguide_accounts_create_warn']='Cette seconde méthode n\'est pas recommandée puisqu\'elle peut laisser une trace de votre mot de passe dans le registre de la console.';
$i8n['userguide_accounts_delete_title']='Suppression d\'un Compte';
$i8n['userguide_accounts_delete_desc']='Les comptes ne peuvent pas être supprimés depuis le client ou la console. Pour supprimer un compte, supprimez le fichier associé avec le compte dans le dossier keystore. Faites attention de ne supprimer aucun autre fichier. Il est recommandé de sauvegarder toutes les clés créées avec votre portefeuille. Veuillez apporter beaucoup d\'attention à bien vérifier que vous allez supprimer le fichier clé/compte que vous désirez supprimer.';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='Envoyer des Transactions';
$i8n['userguide_sending_gexp_title']='Envoyer une transaction depuis GEXP';
$i8n['userguide_sending_gexp_desc']='Pour envoyer une transaction depuis gexp, utiliser la commande exp.sendTransaction, en remplaçant les adresses de comptes from et to  respectivement par les adresses de l\'expéditeur et du destinataire:';
$i8n['userguide_sending_gexp_example']='Exemple: Envoyer 1 EXP au compte 0x00 depuis le compte 0x00.';
$i8n['userguide_sending_wallet_title']='Envoyer une transaction depuis EXPWALLET';
$i8n['userguide_sending_wallet_desc']='Pour envoyer une transaction en utilisant expwallet, cliquez simplement sur l\'onglet Transactions, sélectionnez l\'adresse depuis laquelle vous désirez émettre la transaction, entrez l\'adresse du destinataire, le montant (et le Gaz, si désiré), et cliquez sur Send.';
?>
