<?php
//Expanse Internationalzation Language File - English : Docs 
//Version: 0.0.1

// Documentation : User Guide : Menu
$i8n['userguide_header']='Οδηγός Χρήστη';
$i8n['userguide_menu_install']='Εγκατάσταση';
$i8n['userguide_menu_backup']='Αντίγραφα &amp; Ασφαλείας';
$i8n['userguide_menu_mining']='Γρήγορη Εκκίνηση Εξόρυξης';
$i8n['userguide_menu_accounts']='Διαχείρηση Λογαριασμών';
$i8n['userguide_menu_tx']='Αποστολή Συναλλαγών';
				
// Documentation : User Guide : Installation
$i8n['userguide_install_title']='Εγκατάσταση';
$i8n['userguide_install_download_title']='Λήψεις';
$i8n['userguide_install_download_desc']='Κατεβάστε το Expanse για την προτιμώμενη πλατφόρμα';
$i8n['userguide_install_run_cmd_title']='Εκτέλεση του Expanse - Γραμμή εντολών';
$i8n['userguide_install_run_desc']='Το Expanse μπορεί να τρέξει από την γραμμή εντολών (gexp), ή μέσω ενός γραφικού πελάτη πορτοφολιού (expwallet).';
$i8n['userguide_install_run_cmd']='Για την εκτέλεση του gexp απο την γραμμή εντολών, μεταβείτε από την κονσόλα στον φάκελο που περιέχει το εκτελέσιμο του gexp και εκτελέστε την εντολή gexp.';
$i8n['userguide_install_args']='Μπορείτε να προσαρτήσετε διάφορες εντολές και επιχειρήματα κατά την επιλογή για να προσαρμόσετε το Expanse, όπως για παράδειγμα <code>console</code> (για να ξεκινήσει με διαδραστική κονσόλα javascript), <code>--verbosity</code> (για να αυξηθεί η λεπτομέρεια εξόδου), ή <code>--rpcport</code> (για να καθοριστεί η θύρα RPC). Λεπτομερείς πληροφορίες σχετικά με τα επιχειρήματα αυτά μπορούν να βρεθούν στο <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse Wiki : Command Line Options</a>.';
$i8n['userguide_install_example']='Παράδειγμα';
$i8n['userguide_install_attach']='Για την σύνδεση της κονσόλας σε μια τρέχουσα διεργασία του gexp, συμπεριλάβετε στην εντολή &quot;attach&quot;.';
$i8n['userguide_install_rungui_title']='Εκτελώντας το Expanse - EXPWallet με Γραφικό Περιβάλλον';
$i8n['userguide_install_rungui']='Για να εκτελέσετε το Γραφικό Περιβάλλον του Expanse, απλά τρέξτε το εκτελέσιμο αρχείο του expwallet. Εάν ήδη τρέχει το gexp, το να τρέξετε το expwallet θα το συνδέσει με αυτό. Εάν δεν τρέχει το gexp, θα εκτελεστεί μια εσωτερική διεργασία του gexp.';
$i8n['userguide_install_firstrun_title']='Πρώτη Εκτέλεση/Εγκατάσταση';
$i8n['userguide_install_firstrun_desc']='Την πρώτη φορά που θα εκτελέσετε το expanse, θα σας ζητηθεί να συμφωνήσετε με το συμφωνητικό χρήστη. Το Expanse θα ελέγξει τον προεπιλεγμένο φάκελο εργασίας για υπάρχοντα αρχεία, και αν δεν βρεθούν, θα τα δημιουργήσει. Προτείνετε να δημιουργήσετε λογαριασμό αν δεν το έχετε κάνει ήδη.';

// Documentation : User Guide : Backing Up &amp; Restoring
$i8n['userguide_backup_title']='Αντίγραφα &amp; Ασφαλείας';
$i8n['userguide_backup_dataloc']='Τοποθεσία Δεδομένων';
$i8n['userguide_backup_loc']='Τα Πορτοφόλια/Λογαριασμοί αποθηκεύονται στον φάκελο Keystore μέσα στο φάκελο δεδομένων του Expanse\'s.';
$i8n['userguide_backup_locos']='Η θέση αυτού του καταλόγου από προεπιλογή ανά Λειτουργικό Σύστημα:';
$i8n['userguide_backup_datadir']='Είναι δυνατόν να καθοριστεί ο φάκελος μέσω των <code>--datadir</code> παραμέτρων όταν εκτελέσετε το πορτοφόλι. ';
$i8n['userguide_backup_wallet']='Αντίγραφο Ασφαλείας Πορτοφολιού/Λογαριασμού';
$i8n['userguide_backup_walletdesc']='Για να πάρετε αντίγραφο ασφαλείας του πορτοφολιού και του λογαριασμού σας απλά αντιγράψτε τον φάκελο keystore (ή τα περιεχόμενα του) σε μια άλλη τοποθεσία.';
$i8n['userguide_backup_restore']='Επαναφορά Αντίγραφου Ασφαλείας Πορτοφολιού/Λογαριασμού';
$i8n['userguide_backup_restoredesc']='Για την επαναφορά του πορτοφολιού,  αντιγράψτε τα περιεχόμενα του keystore φακέλου στον ίδιο φάκελο στον φάκελο δεδομένων του expanse.';


// Documentation : User Guide : Mining Quick Start
$i8n['userguide_mining_title']='Γρήγορος Οδηγός Εξόρυξης';
$i8n['userguide_mining_desc']='Η Εξόρυξη μπορεί να γίνει εσωτερικά, ή με εργαλεία τρίτων.';
$i8n['userguide_mining_cpu']='Εξόρυξη με τη χρήση CPU με το GEXP';
$i8n['userguide_mining_cpudesc']='Μπορείτε να ξεκινήσετε την εξόρυξη με το gexp με το να χρησιμοιποιήσετε την εντολή <code>--mine</code> όταν ξεκινήσετε το gexp. Μπορείτε να ρυθμίσετε την ποσότητα των νημάτων CPU που χρησιμοποιείται από τα ορυχεία με την εντολή <code>--minerthreads</code>';
$i8n['userguide_mining_cmd']='Μπορείτε να ξεκινήσετε και να σταματήσετε την εξόρυξη κατευθείαν απο την κονσόλα του exp με την εντολή miner.start και miner.stop.';
$i8n['userguide_mining_ethminer']='Εξόρυξη με χρήση GPU και το Ethminer';
$i8n['userguide_mining_cors']='Απαιτείται να είναι ενεργό το rpc και το rpccorsdomain για να επιτραπεί τοπική πρόσβαση.';

// Documentation : User Guide : Managing Accounts
$i8n['userguide_accounts_title']='Διαχείριση Λογαριασμών';
$i8n['userguide_accounts_create_title']='Δημιουργία Λογαριασμού';
$i8n['userguide_accounts_create_desc']='Για την δημιουργία λογαριασμού με την χρήση του gexp απο την κονσόλα, τρέξτε την εντολή geth account new, και θα σας ζητηθεί ένας κωδικός.';
$i8n['userguide_accounts_create_warn']='Αυτή η μέθοδος δεν συνιστάτε καθώς μπορεί να αφήσει εγγραφές του κωδικού σας στο αρχείο καταγραφής.';
$i8n['userguide_accounts_create_run']='Για την δημιουργία ενός λογαριασμού εσωτερικά μιας διεργασίας του expanse, τρέξτε την εντολή';
$i8n['userguide_accounts_delete_title']='Διαγραφή ενός Λογαριασμού';
$i8n['userguide_accounts_delete_desc']='Οι λογαριασμού δεν μπορούν να διαγραφούν απο το εσωτερικό του πελάτη ή της κονσόλας. Για να διαγράψετε ένα λογαριασμό, διαγράψτε το αρχείο που σχετίζεται με το λογαριασμό από το φάκελο αποθήκευσης κλειδιών. Να είστε προσεκτικοί ώστε να μην διαγράψετε οποιαδήποτε άλλα αρχεία. Συνιστάται να δημιουργήσετε αντίγραφα ασφαλείας όλων των κλειδιών που δημιουργήθηκαν με το πορτοφόλι σας. Παρακαλείστε να ασκήσετε επιπλέον προσοχή για να εξακριβώσετε αν διαγράφετε μόνο τα κλειδιά που σκοπεύετε.';
// Documentation : User Guide : Sending Transactions
$i8n['userguide_sending_title']='Αποστολή Συναλλαγών';
$i8n['userguide_sending_gexp_title']='Αποστολή Συναλλαγών από το GEXP';
$i8n['userguide_sending_gexp_desc']='Για την αποστολή συναλλαγής μέσω του gexp, χρησιμοποιήστε στην κονσόλα την εντολή exp.sendTransaction,  αντικαθιστώντας τις διευθύνσεις του αποστολέα και του παραλήπτη με τις επιθυμητές διευθύνσεις:';
$i8n['userguide_sending_gexp_example']='Παράδειγμα: Αποστολή 1 EXP στο λογαριασμό 0x00 απο το λογαριασμό 0x00.';
$i8n['userguide_sending_wallet_title']='Αποστολή Συναλλαγής απο το EXPWallet';
$i8n['userguide_sending_wallet_desc']='Για την αποστολή μιας συναλλαγής με την χρήση του expwallet, απλά κάντε κλίκ στην καρτέλα Συναλλαγές, και επιλέξτε την διεύθυνση απο την οποία θέλετε να στείλετε, και εισάγετε την διεύθυνση και το ποσό (και το gas, αν επιθυμείτε) και πατήστε Αποστολή.';
?>
