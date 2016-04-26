<?php include_once('i8n/i8n.php'); ?>
<?php include('header.php'); ?>
<section class="navspacer">&nbsp;</section>
<div id="documentation" class="page">
  <div id="docs_header" class="section">
    <div class="container text-center">
      <div class="row"><br>
        <h2 class="doc_title"><?php echo $i8n['userguide_header']; ?></h2>
        <ul class="userguide_nav">
          <li><a class="docslink" href="./guide#install"><?php echo $i8n['userguide_menu_install']; ?></a></li>
          <li><a class="docslink" href="./guide#backup"><?php echo $i8n['userguide_menu_backup']; ?></a></li>
          <li><a class="docslink" href="./guide#mining"><?php echo $i8n['userguide_menu_mining']; ?></a></li>
          <li><a class="docslink" href="./guide#accounts"><?php echo $i8n['userguide_menu_accounts']; ?></a></li>
          <li><a class="docslink" href="./guide#transactions"><?php echo $i8n['userguide_menu_tx']; ?></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="guide" class="section">
    <div class="container">
      <div class="row spcrow">
          <h2 id="install"><?php echo $i8n['userguide_install_title']; ?></h2>
          <hr />
          <strong><?php echo $i8n['userguide_install_download_title']; ?></strong>
            <p class="pad-bottom"><?php echo $i8n['userguide_install_download_desc']; ?>:</p>
            <div class="clearfix doc_tables">
            <table class="centertable downloadtable">
              <tbody>
                <tr>
                  <td colspan="4">GEXP<br>
                    Current Version: v1.3.5</td>
                </tr>
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
                  <td><a href="/downloads/gexp-windows-x86.zip">gexp-windows-x86.zip</a><br>
                    <a href="/downloads/gexp-windows-x64.zip">gexp-windows-x64.zip</a></td>
                  <td><a href="/downloads/gexp-darwin-x86.tar.gz">gexp-darwin-x86.tar.gz</a><br>
                    <a href="/downloads/gexp-darwin-x64.tar.gz">gexp-darwin-x64.tar.gz</a></td>
                  <td><a href="/downloads/gexp-linux-x86.tar.gz">gexp-linux-x86.tar.gz</a><br>
                    <a href="/downloads/gexp-linux-x64.tar.gz">gexp-linux-x64.tar.gz</a><br>
                    <a href="/downloads/gexp-linux-arm.tar.gz"> gexp-linux-arm.tar.gz</a></td>
                  <td><a href="//www.github.com">Github</a></td>
                </tr>
                <tr>
                  <td colspan="4">Android Version: <a href="/downloads/gexp-android-arm-21.tar.gz">gexp-android-arm-21.tar.gz</a></td>
                </tr>
              </tbody>
            </table>
            <table class="centertable downloadtable">
              <tbody>
                <tr>
                  <td colspan="4">EXPWallet<br>
                    Current Version: v0.0.3</td>
                </tr>
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
          <strong><?php echo $i8n['userguide_install_run_cmd_title']; ?></strong>
          <p><?php echo $i8n['userguide_install_run_desc']; ?></p>
          <p><?php echo $i8n['userguide_install_run_cmd']; ?></p>
          <p class="pad-bottom"><code>./gexp</code></p>
          <p><?php echo $i8n['userguide_install_args']; ?></p>
          <p><?php echo $i8n['userguide_install_example']; ?>:</p>
          <p class="pad-bottom"><code>./gexp console --verbosity=4</code></p>
          <p><?php echo $i8n['userguide_install_attach']; ?></p>
          <p class="pad-bottom"><code>./gexp attach</code></p>
          <strong><?php echo $i8n['userguide_install_rungui_title']; ?></strong>
          <p class="pad-bottom"><?php echo $i8n['userguide_install_rungui']; ?></p>
          <strong><?php echo $i8n['userguide_install_firstrun_title']; ?></strong>
          <p><?php echo $i8n['userguide_install_firstrun_desc']; ?></p>
          <p>&nbsp;</p>
      </div>
      
      
      
      
      
      <div class="row">
        <h2 id="backup"><?php echo $i8n['userguide_backup_title']; ?></h2>
        <hr />
        <strong><?php echo $i8n['userguide_backup_dataloc']; ?></strong>
        <p><?php echo $i8n['userguide_backup_loc']; ?></p>
        <?php echo $i8n['userguide_backup_locos']; ?>
        <ul>
          <li>Mac: ~/Library/Expanse</li>
          <li>Linux: ~/.expanse</li>
          <li>Windows: %APPDATA%/Expanse</li>
        </ul>
        <p><?php echo $i8n['userguide_backup_datadir']; ?></p>
        <strong><?php echo $i8n['userguide_backup_wallet']; ?></strong>
        <p><?php echo $i8n['userguide_backup_walletdesc']; ?></p>
        <strong><?php echo $i8n['userguide_backup_restore']; ?></strong>
        <p><?php echo $i8n['userguide_backup_restoredesc']; ?></p>
        <p>&nbsp;</p>
      </div>
      <div class="row">
        <h2 id="mining"><?php echo $i8n['userguide_mining_title']; ?></h2>
        <hr />
        <p><?php echo $i8n['userguide_mining_desc']; ?></p>
        <p><strong><?php echo $i8n['userguide_mining_cpu']; ?>:</strong></p>
        <p><?php echo $i8n['userguide_mining_cpudesc']; ?>:</p>
        <p class="pad-bottom"><code>./gexp --mine --minerthreads=4</code></p>
        <p><?php echo $i8n['userguide_mining_cmd']; ?></p>
        <p class="pad-bottom"><code>&gt; miner.start(8)<br/>
        true<br/>
        &gt; miner.stop()<br/>
        true</code></p>
        <p><?php echo $i8n['userguide_mining_ethminer']; ?>:</p>
        <p><code>gexp --rpc --rpccorsdomain localhost 2&gt;&gt; gexp.log</code></p>
        <p class="pad-bottom"><code>ethminer -G</code></p>
        <p><?php echo $i8n['userguide_mining_cors']; ?></p>
        <p>&nbsp;</p>
      </div>
      <div class="row">
        <h2 id="accounts"><?php echo $i8n['userguide_accounts_title']; ?></h2>
        <hr />
        <strong><?php echo $i8n['userguide_accounts_create_title']; ?></strong>
        <p> <?php echo $i8n['userguide_accounts_create_desc']; ?></p>
          <p><code>gexp --password &lt;passwordfile&gt; account new</code></p>
          <p><span class="smalltext"><?php echo $i8n['userguide_accounts_create_warn']; ?></span> </p>
        <p><?php echo $i8n['userguide_accounts_create_run']; ?>:</p>
         <p class="pad-bottom"><code>personal.newAccount("passphrase")</code></p>
        <strong><?php echo $i8n['userguide_accounts_delete_title']; ?></strong>
        <p><?php echo $i8n['userguide_accounts_delete_desc']; ?></p>
        <p>&nbsp;</p>
      </div>
      <div class="row">
        <h2 id="transactions"><?php echo $i8n['userguide_sending_title']; ?></h2>
        <hr />
        <strong><?php echo $i8n['userguide_sending_gexp_title']; ?></strong>
        <p><?php echo $i8n['userguide_sending_gexp_desc']; ?></p>
        <p>sendTransaction({from:"FROMACCOUNT", to:"TOACCCOUNT", value: AMOUNTINWEI});</p>
        <p><?php echo $i8n['userguide_sending_gexp_example']; ?></p>
        <p class="pad-bottom"><code>exp.sendTransaction({from:"0x00", to:"0x00", value: web3.toWei(1, "expanse")});</code></p>
        <strong><?php echo $i8n['userguide_sending_wallet_title']; ?></strong>
        <p><?php echo $i8n['userguide_sending_wallet_desc']; ?></p>
      </div>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<!-- /documentation -->
<?php include('./footer.php'); ?>