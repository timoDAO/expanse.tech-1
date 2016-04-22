<?php include_once('i8n/i8n.php'); ?>
<?php include('header.php'); ?>
<section class="navspacer">&nbsp;</section>
<div id="documentation" class="page">

    <div id="docs_header" class="section">
        <div class="container text-center">
            <div class="row"><br>

                <h2 class="doc_title">User Guide</h2>
                <br>

                <ul class="nlist">
                    <li><a class="docslink" href="./guide#install">Installation</a></li>
                    <li><a class="docslink" href="./guide#backup">Backing Up &amp; Restoring</a></li>
                    <li><a class="docslink" href="./guide#mining">Mining Quick Start</a></li>
                    <li><a class="docslink" href="./guide#accounts">Managing Accounts</a></li>
                    <li><a class="docslink" href="./guide#transactions">Sending Transactions</a></li>
                </ul>
                <br />
				
            </div>
        </div>
    </div>

    <div id="guide" class="section">
		<div class="container">
            <div class="row spcrow">
                <div>
                    <h2 id="install">Installation</h2>
                    <hr />
                    <div class="clearfix">
                        <strong>Download</strong>
                        <p>Download Expanse for your preferred platform:</p>
                        <table class="centertable downloadtable">
                          <tbody>
                          <tr> <td colspan="4">GEXP<br>
                            Current Version: v1.3.5</td></tr>
                            <tr>
                              <td><img src="/images/winicon2.png" width="64" height="64" alt="windows"/><br>
                              Windows</td>
                              <td><img src="/images/macicon.png" width="64" height="64" alt="osx" /><br>
                              OSX</td>
                              <td><img src="/images/icon_linux.png" width="64" height="64" alt="linux" /><br>
                              Linux</td>
                              <td><img src="/images/icon_git.png" width="64" height="64" alt="github" /><br>
                              Source</td>
                            
                            </tr>
                            <tr>
                              <td> <a href="/downloads/gexp-windows-x86.zip">gexp-windows-x86.zip</a><br>
                              <a href="/downloads/gexp-windows-x64.zip">gexp-windows-x64.zip</a></td>
                              <td><a href="/downloads/gexp-darwin-x86.tar.gz">gexp-darwin-x86.tar.gz</a><br>
                               <a href="/downloads/gexp-darwin-x64.tar.gz">gexp-darwin-x64.tar.gz</a>
                              </td>
                              <td><a href="/downloads/gexp-linux-x86.tar.gz">gexp-linux-x86.tar.gz</a><br>
                              <a href="/downloads/gexp-linux-x64.tar.gz">gexp-linux-x64.tar.gz</a><br>
                             <a href="/downloads/gexp-linux-arm.tar.gz"> gexp-linux-arm.tar.gz</a></td>
                              <td><a href="//www.github.com">Github</a></td>
                             
                            </tr><tr><td colspan="4">Android Version: <a href="/downloads/gexp-android-arm-21.tar.gz">gexp-android-arm-21.tar.gz</a></td></tr>
                          </tbody>
                        </table>
                        <table class="centertable downloadtable">
                          <tbody> <tr> <td colspan="4">EXPWallet<br>
                            Current Version: v0.0.3</td></tr>
                            <tr>
                              <td><img src="/images/winicon2.png" width="64" height="64" alt="" /><br>
                                Windows</td>
                              <td><img src="/images/macicon.png" width="64" height="64" alt="osx"/><br>
                                OSX</td>
                              <td><img src="/images/icon_linux.png" width="64" height="64" alt="linux"/><br>
                                Linux</td>
                              <td><img src="/images/icon_git.png" width="64" height="64" alt="github" /><br>
                                Source</td>
                            </tr>
                            <tr>
                              <td><a href="/downloads/expwallet-win.zip">expwallet-win.zip</a></td>
                              <td><a href="/downloads/expwallet-mac.zip">expwallet-mac.zip</a></td>
                              <td>Coming Soon</td>
                              <td>Coming Soon</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <br />
                    <strong>Running Expanse</strong>
                    <p>Expanse can be run from the command line(gexp), or through a graphical wallet client(expwallet).<br><br>To run  gexp from the command line,  navigate your console to the directory holding the gexp executable and run the gexp command. <br><code>./gexp</code></p>
                    <p> You may append various commands and option arguments to customize the expanse instance such as <code>console</code>  (to launch with interactive javascript console), <code>--verbosity</code> (to increase the detail of output), or <code>--rpcport</code>  (to specify RPC port). Detailed information on these arguements can be found on <a href="https://github.com/expanse-project/go-expanse/wiki/Command-Line-Options">Expanse Wiki : Command Line Options</a>.<br>
                      </p>
                    <p>Example:<br><code>./gexp console --verbosity=4</code> </p>
                    <p><br>To attach a console to an already running instance of gexp, include the argument &quot;attach&quot;. </p>
                    <p><code>./gexp attach</code></p>
                    <p>EXPWallet</p><p>
                      To run the expanse GUI,  simply run the expwallet executable. If you are already running an instance of gexp, running expwallet will attach itself to that instance. If you do not have an instance of gexp running, it will launch an internal instance of gexp.</p></div><div>
                    <p><br><strong>First Run/Install</strong></p>
                    <p>The first time you run expanse, you will be prompted to agree to the user agreement. Expanse will check the default or specified datadir for pre-exsisting files, and if any are not found, it will create them.  It is suggested you now Create an Account if you have not done so.</p>
                    <p>&nbsp;</p>
                </div>
                </div>
                <div class="row"><h2 id="backup">Backing Up &amp; Restoring</h2>
                  <hr /><strong>Data Location</strong>
                  <p>Wallets/Accounts are stored in the Keystore Folder inside Expanse's Data Directory.</p>
                  The location of this directory by default per OS:
                  <ul>
                    <li>Mac: ~/Library/Expanse</li>
                    <li>Linux: ~/.expanse</li>
                    <li>Windows: %APPDATA%/Expanse</li>
                  </ul>
                  <p>It is possible to specify the directory with the --datadir parameter when launching the wallet. </p>
                  <strong>Wallet/Account Backup</strong>
                  <p>To back up your wallet and accounts simply save a copy of the keystore folder(or its contents) to another location.</p>
                  <strong>Wallet/Account Restore</strong>
                  <p>To restore your wallet,  copy the contents of your keystore backup to the keystore folder in the expanse data directory.</p>
                  <p>&nbsp;</p>
                </div>
                <div><h2 id="mining">Mining Quick Start</h2><hr />Mining can be done internally, or with third party tools.<p><br>
                  CPU Mining with GEXP:<br>
                  You can initiate gexp with mining enabled by using the <code>--mine</code> argument when launching gexp. You may set the amount of cpu threads being utilized in mining with the <code>--minerthreads</code> argument.<br>
                  <br>
                  <code>./gexp --mine --minerthreads=4</code>            </p>
                  <p>You may also 
                  start and stop the miner directly from the exp console with the miner.start and miner.stop commands.<br/><code>&gt; miner.start(8)<br/>true<br/>&gt; miner.stop()<br/>true</code></p>
                  <p>
                  GPU Mining with Ethminer:</p>
                  <p><code>gexp --rpc --rpccorsdomain localhost 2&gt;&gt; gexp.log</code><br>
    <code>ethminer -G</code><br>
    <br>
    It is required that rpc is enabled and rpccorsdomain allows localdomain access. 
                  </p>
                  <p>&nbsp;</p>
                </div>
                <div><h2 id="accounts">Managing Accounts</h2><hr />
                  <p><strong>Creating a New Account</strong></p>
                  <p>To Create an account using gexp from your native console, run the command geth account new, and you will be prompted for a password.<br>
                    <code>gexp --password &lt;passwordfile&gt; account new</code><br>
                  This method is not recommended since it may leave a record of your password in the console log.</p>
                  <p>To Create an account inside a running expanse console instance, run the command:<br>
      <code>personal.newAccount("passphrase")</code></p>
                  <br />
                  <p><strong>Deleteing an Account</strong></p>
                  <p>Accounts cannot be deleted from within the client or console. To Delete an account, delete the file associated with the account from your keystore folder. Be careful not to delete any other files. It is recommended to back up all keys created with your wallet. Please exercise extra caution to verify you only delete the keys you intend to.</p>
                  <p>&nbsp;</p>
                </div>
                <div><h2 id="transactions">Sending Transactions</h2><hr />
                <strong>Sending a Transaction from GEXP</strong>
                <p>To send a transaction from gexp, use the console command exp.sendTransaction,  replacing the  from and to account addresses with the desired sender and recipient addresses respectively: <br>
                  sendTransaction({from:"FROMACCOUNT", to:"TOACCCOUNT", value: AMOUNTINWEI});</p>
                <p>Example: Sending 1 EXP to account 0x00 from account 0x00.</p>
                <p><code>exp.sendTransaction({from:"0x00", to:"0x00", value: web3.toWei(1, "expanse")});</code></p>
                <br />
                <p><strong>Sending a Transaction from EXPWallet </strong> </p>
                <p>To send a transaction using expwallet, simply click the Transactions tab, select the address you would like to send from, enter the to address, amount(and gas, if desired) and cick Send.</p>
                </div>
                <p>&nbsp;</p>
			</div>
	</div> 
</div><!-- /documentation -->
<?php include('./footer.php'); ?>