��    �      �  �   �
      �  �   �  �   2  %   �  =     .   ?  %   n  �   �  �   ~  a   *  G   �  J   �  I     %  i  �   �  �   +  A   �  ;   $  <   `  5   �  ;   �  G     <   W  0   �  =   �  ;     <   ?  ;   |  <   �     �     �  �     �   �  7   8  7   p  /   �  ,   �  -        3     D  
   P     [     k     �     �     �     �     �          /      3     T     \     d     k     ~     �     �     �     �     �     �     �  &        2     :     C     J     S     h     o     �  #   �     �     �  %   �     �               8      Q  @   r  �   �     m     �     �     �     �  �   �     H      U      l      }      �      �   	   �   .   �      �      �      	!     !!  	   >!     H!     W!     f!  P   l!  Q   �!     "     "  6   "     L"  $   h"     �"     �"     �"     �"     �"     �"  Q   	#     [#     c#  %   �#  -   �#     �#     �#     �#      $  "   $     1$     I$     Q$     Y$  	   f$     p$  
   ~$     �$     �$     �$     �$  !   �$     �$     %     %     7%     I%  4   Z%     �%     �%  $   �%     �%     �%     �%     &     &     !&     ;&     X&     r&     �&     �&     �&     �&     �&     �&  %   '     ,'     3'     <'      L'     m'  �   �'     2(  *   J(  m  u(  �   �)  �   �*  3   �+  K   �+  ?   ,  %   U,    {,  �   �-  t   ~.  [   �.  ]   O/  P   �/  %  �/  �   $1    2  O   3  I   W3  F   �3  =   �3  C   &4  k   j4  G   �4  =   5  T   \5  H   �5  F   �5  C   A6  G   �6     �6  $   �6  �   �6  �   �7  S   �8  `   �8  <   @9  4   }9  3   �9     �9     �9     :     :  /   5:  $   e:  )   �:     �:     �:     �:     ;      ;  #   ';  	   K;  	   U;     _;     e;     };     �;     �;  *   �;     �;     �;  #   <  =   &<  :   d<     �<     �<     �<     �<     �<     �<  !   �<     =  )   )=     S=     s=  A   �=     �=     �=     �=     >  $   2>  >   W>  �   �>  !   �?  '   �?     �?     �?     �?    �?     �@     A  !   ,A     NA     TA     ]A     wA  B   �A  !   �A     �A     B       B     AB     QB     iB     �B  ]   �B  |   �B  
   kC  
   vC  G   �C  +   �C  *   �C      D     -D     9D  2   UD     �D  #   �D  k   �D     2E  /   :E  ,   jE  F   �E     �E     �E     F     F  %   -F  !   SF     uF     |F     �F     �F     �F     �F  
   �F     �F     �F  %   G  /   5G     eG     |G  $   �G     �G     �G  <   �G     %H  #   +H  )   OH  	   yH  (   �H  "   �H     �H     �H     �H  (   �H  /   'I      WI     xI  !   �I     �I     �I  	   �I  )   �I  -   J     FJ     OJ     `J  (   pJ     �J  �   �J     �K  4   �K            E   �   �   �       �   Q   $          A       B   R          �   #   i   '   �           �          s      I      �       n   v   `          �       ~   �       	   M   �   q   �   �   �   �      @                 �   r   =   a   �   o   1   �   0       f   d   ^       z   �          (   
   ,       �       {              U   9   �   h       ]   &           .   �   �   [   S   C   �   ;   K   4   w       D   �   �   V       �       8      y   �   �       6       �   �   c   u   |   _          t   �   W   Z       X       T          !   x   p       �   N   b   �          2       5              �   �   �                 �   /   \   Y   �       }   O       J   l      )   ?           +       �         >   3   �   7   %   m   <           �           j                 �   e       �   H   g           F   k   P              G       �      :   -   �   *      "              L               ->  It will ban particular users by just putting their ids seprated by commas(,). If user is Ban then they will not able to access wp file manager on front end. -> * for all operations and to allow some operation you can mention operation name as like, allowed_operations="upload,download". Note: seprated by comma(,). Default: * -> File Manager Theme. Default: Light -> File Modified or Create date format. Default: d M, Y h:i A -> File manager Language. Default: English(en) -> Filemanager UI View. Default: grid -> Here "test" is the name of folder which is located on root directory, or you can give path for sub folders as like "wp-content/plugins". If leave blank or empty it will access all folders on root directory. Default: Root directory -> It will allow all roles to access file manager on front end or You can simple use for particular user roles as like allowed_roles="editor,author" (seprated by comma(,)) -> It will lock mentioned in commas. you can lock more as like ".php,.css,.js" etc. Default: Null -> for access to read files permission, note: true/false, default: true -> for access to write files permissions, note: true/false, default: false -> it will hide mentioned here. Note: seprated by comma(,). Default: Null <code>[wp_file_manager view="list" lang="en" theme="light" dateformat="d M, Y h:i A" allowed_roles="editor,author" access_folder="wp-content/plugins" write = "true" read = "false" hide_files = "kumar,abc.php" lock_extensions=".php,.css" allowed_operations="upload,download" ban_user_ids="2,3"] <code>[wp_file_manager]</code> -> It will show file manager on front end. But only Administrator can access it and will control from file manager settings. <code>[wp_file_manager_admin]</code> -> It will show file manager on front end. You can control all settings from file manager settings. It will work same as backend WP File Manager. <span class="fm_console_error">Nothing selected for backup</span> <span class="fm_console_error">Others backup failed.</span> <span class="fm_console_error">Plugins backup failed.</span> <span class="fm_console_error">Security Issue.</span> <span class="fm_console_error">Themes backup failed.</span> <span class="fm_console_error">Unable to create database backup.</span> <span class="fm_console_error">Uploads backup failed.</span> <span class="fm_console_success">All Done</span> <span class="fm_console_success">Database backup done.</span> <span class="fm_console_success">Others backup done.</span> <span class="fm_console_success">Plugins backup done.</span> <span class="fm_console_success">Themes backup done.</span> <span class="fm_console_success">Uploads backup done.</span> Action Actions upon selected backup(s) Admin can restrict actions of any user. Also hide files and folders and can set different - different folders paths for different users. Admin can restrict actions of any userrole. Also hide files and folders and can set different - different folders paths for different users roles. After enable trash, your files will go to trash folder. After enabling this all files will go to media library. Are you sure want to remove selected backup(s)? Are you sure you want to delete this backup? Are you sure you want to restore this backup? Backup / Restore Backup Date Backup Now Backup Options: Backup data (click to download) Backup files will be under Backup is running, please wait Backup not found! Backup removed successfully! Backup successfully deleted. Backups removed successfully! Ban Browser and OS (HTTP_USER_AGENT) Buy PRO Buy Pro Cancel Change Theme Here: Code-editor View Confirm Copy files or folders Currently no backup(s) found. DELETE FILES Dark Database Backup Database backup done on date  Database backup restored successfully. Default Default: Delete Deselect Dismiss this notice. Donate Download Files Logs Download files Duplicate or clone a folder or file Edit Files Logs Edit a file Enable Files Upload to Media Library? Enable Trash? Existing Backup(s) Extract archive or zipped file File Manager - Shortcode File Manager - System Properties File Manager Root Path, you can change according to your choice. File Manager has a code editor with multiple themes. You can select any theme for code editor. It will display when you edit any file. Also you can allow fullscreen mode of code editor. File Operations List: File doesn't exist to download. Files Backup Gray Help Here admin can give access to user roles to use filemanager. Admin can set Default Access Folder and also control upload size of filemanager. Info of file Invalid Security Code. Last Log Message Light Logs Make directory or folder Make file Maximum file upload size (upload_max_filesize) Memory Limit (memory_limit) Missing backup id. Missing parameter type. Missing required parameters. No Thanks No log message No logs found! Note: Note: These are demo screenshots. Please buy File Manager pro to Logs functions. Note: This is just a demo screenshot. To get settings please buy our pro version. OK Ok Others (Any other directories found inside wp-content) Others backup done on date  Others backup restored successfully. PHP version Parameters: Paste a file or folder Please Enter Email Address. Please Enter First Name. Please Enter Last Name. Please change this carefully, wrong path can lead file manager plugin to go down. Plugins Plugins backup done on date  Plugins backup restored successfully. Post maximum file upload size (post_max_size) Preferences Privacy Policy Public Root Path RESTORE FILES Remove or delete files and folders Rename a file or folder Restore SUCCESS Save Changes Saving... Search things Select All Settings Settings - Code-editor Settings - General Settings - User Restrictions Settings - User Role Restrictions Settings saved. Shortcode - PRO Simple cut a file or folder System Properties Terms of Service The backup apparently succeeded and is now complete. Themes Themes backup done on date  Themes backup restored successfully. Time now Timeout (max_execution_time) To make a archive or zip Today USE: Unable to removed backup! Unable to restore DB backup. Unable to restore others. Unable to restore plugins. Unable to restore themes. Unable to restore uploads. Upload Files Logs Upload files Uploads Uploads backup done on date  Uploads backup restored successfully. Verify View Log WP File Manager WP File Manager - Backup/Restore WP File Manager Contribution We love making new friends! Subscribe below and we promise to
    keep you up-to-date with our latest new plugins, updates,
    awesome deals and a few special offers. Welcome to File Manager You have not made any changes to be saved. Project-Id-Version: 
PO-Revision-Date: 2021-07-16 17:19+0530
Last-Translator: 
Language-Team: 
Language: sq
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 2.4.3
X-Poedit-Basepath: ..
Plural-Forms: nplurals=2; plural=(n != 1);
X-Poedit-KeywordsList: __;_e;esc_attr__;esc_html__
X-Poedit-SearchPath-0: .
 -> Do të ndalojë përdorues të veçantë duke vendosur id-të e tyre të ndara me presje (,). Nëse përdoruesi është Ban, atëherë ata nuk do të kenë mundësi të hyjnë në menaxherin e skedarëve wp në pjesën e përparme. -> * për të gjitha operacionet dhe për të lejuar disa operacione mund të përmendni emrin e operacionit si like, allow_operations = "upload, download". Shënim: ndarë me presje (,). Default: * -> Tema e Menaxherit të Skedarëve. Default: Light -> Skedari Modifikohet ose Krijoni formatin e datës. Default: d M, Y h:i A -> Gjuha e menaxherit të skedarëve. Parazgjedhur: English(en) -> Pamja UI e Skedarit. Default: grid -> Këtu "test" është emri i dosjes që ndodhet në direktorinë rrënjë, ose mund të jepni shteg për nën-dosjet si "wp-content / plugins". Nëse lihet bosh ose bosh, do të ketë qasje në të gjitha dosjet në direktorinë rrënjësore. Default: Root directory -> Do të lejojë që të gjitha rolet të kenë qasje në menaxherin e skedarëve në pjesën e përparme ose Ju mund të përdorni thjeshtë për role të veçanta të përdoruesit, si p.sh. allowed_roles="editor,author" (ndarë me presje (,)) -> Do të bllokohet e përmendur me presje. mund të kyçeni më shumë si ".php, .css, .js" etj. Parazgjedhja: Null -> për qasje në lejen e leximit të skedarëve, shënoni: true/false, e paracaktuar: true -> për qasje për të shkruar lejet e skedarëve, shënoni: true/false, e paracaktuar: false -> do të fshihet përmendur këtu. Shënim: ndarë me presje (,). Default: Null <code>[wp_file_manager view="list" lang="en" theme="light" dateformat="d M, Y h:i A" allowed_roles="editor,author" access_folder="wp-content/plugins" write = "true" read = "false" hide_files = "kumar,abc.php" lock_extensions=".php,.css" allowed_operations="upload,download" ban_user_ids="2,3"] <code> [wp_file_manager] </code> -> Do të tregojë menaxherin e skedarëve në pjesën e përparme. Por vetëm Administratori mund të ketë qasje në të dhe do të kontrollojë nga cilësimet e menaxherit të skedarëve. <code> [wp_file_manager_admin] </code> -> Do të tregojë menaxherin e skedarëve në pjesën e përparme. Ju mund të kontrolloni të gjitha cilësimet nga cilësimet e menaxherit të skedarëve. Do të funksionojë njësoj si WP File Manager i prapavijës. <span class="fm_console_error">Asgjë nuk është zgjedhur për rezervë</span> <span class="fm_console_error">Rezervimi i të tjerëve dështoi. </span> <span class="fm_console_error">Rezervimi i shtojcave dështoi. </span> <span class="fm_console_error">Çështja e Sigurisë. </span> <span class="fm_console_error">Rezervimi i temave dështoi. </span> <span class="fm_console_error">Nuk mund të krijohet një kopje rezervë e bazës së të dhënave. </span> <span class="fm_console_error">Rezervimi i ngarkimeve dështoi. </span> <span class="fm_console_success">Të gjitha të bëra </span> <span class="fm_console_success">Rezervimi i bazës së të dhënave u krye. </span> <span class="fm_console_success">Rezervimi i të tjerëve u bë. </span> <span class="fm_console_success">Rezervimi i shtojcave u krye. </span> <span class="fm_console_success">Rezervimi i temave u krye. </span> <span class="fm_console_success">Rezervimi i ngarkimeve u krye. </span> Veprimi Veprimet pas rezervimit të zgjedhur Admin mund të kufizojë veprimet e çdo përdoruesi. Gjithashtu fshehni skedarët dhe dosjet dhe mund të vendosni shtigje të ndryshme - të ndryshme të dosjeve për përdorues të ndryshëm. Admin mund të kufizojë veprimet e çdo përdoruesi. Gjithashtu fshehni skedarët dhe dosjet dhe mund të vendosni shtigje të ndryshme - të ndryshme të dosjeve për role të përdoruesve të ndryshëm. Pas aktivizimit të plehrave, skedarët tuaj do të shkojnë në dosjen e plehrave. Pasi ta keni mundësuar këtë, të gjitha skedarët do të shkojnë në bibliotekën e mediave. Jeni i sigurt që dëshironi të hiqni rezervat e zgjedhura? Je i sigurt që dëshiron ta fshish këtë rezervë? Jeni i sigurt që doni ta riktheni këtë rezervë? Rezervimi / Rikuperimi Data e rezervimit Rezervimi Tani Opsionet e rezervimit: Të dhënat rezervë (kliko për të shkarkuar) Skedarët rezervë do të jenë nën Rezervimi po ekzekutohet, ju lutem prisni Rezervimi nuk u gjet! Rezervimi u hoq me sukses! Rezervimi u fshi me sukses. Rezervimet u hoqën me sukses! ndalim Shfletuesi dhe OS (HTTP_USER_AGENT) Bleni PRO Bleni Pro Anulo Ndryshoni Temën Këtu: Pamja e redaktuesit të kodit Konfirmo Kopjoni skedarë ose dosje Aktualisht nuk u gjet asnjë rezervë (t). Fshi skedarët E errët Rezervimi i bazës së të dhënave Rezervimi i bazës së të dhënave është bërë në datë  Rezervimi i bazës së të dhënave u rikuperua me sukses. Parazgjedhur Parazgjedhur: Fshij Hiq zgjedhjen Hidhe poshtë këtë njoftim. Dhuroni Shkarkoni Regjistrat e Skedarëve Shkarkoni skedarë Kopjoni ose klononi një dosje ose skedar Redakto Regjistrat e Skedarëve Redakto një skedar Të aktivizohet ngarkimi i skedarëve në Bibliotekën e mediave? Të aktivizohet Plehra? Rezervimet ekzistuese Nxjerr arkivin ose skedarin zip Skedari - Kodi i Shkurtër Skedari - Karakteristikat e sistemit Skeda Root Rrugor, ju mund të ndryshoni sipas zgjedhjes suaj. Skedari ka një redaktues kodi me shumë tema. Mund të zgjidhni çdo temë për redaktuesin e kodit. Do të shfaqet kur të ndryshoni ndonjë skedar. Gjithashtu mund të lejoni modalitetin në ekran të plotë të redaktuesit të kodit. Lista e Operacioneve të Dosjeve: Skedari nuk ekziston për ta shkarkuar. Rezervimi i skedarëve Gri Ndihmoni Këtu administratori mund të japë qasje në rolet e përdoruesit për të përdorur menaxherin e skedarëve. Admin mund të vendosë Dosjen e Hyrjes së Paracaktuar dhe gjithashtu të kontrollojë madhësinë e ngarkimit të administratorit të skedarëve. Informacioni i skedarit Kod i pavlefshëm i sigurisë. Mesazhi i Regjistrimit të Fundit Drita Shkrimet Bëni direktori ose dosje Bëni skedarin Madhësia maksimale e ngarkimit të skedarit (upload_max_filesize) Kufiri i kujtesës (memory_limit) ID-ja e rezervës mungon. Lloji i parametrit mungon. Mungojnë parametrat e kërkuar. Jo faleminderit Asnjë mesazh regjistri Nuk u gjet asnjë regjistër! Shënim: Shënim: Këto janë pamje ekrani demo. Ju lutemi blini File Manager pro tek funksionet Logs. Shënim: Kjo është vetëm një pamje ekrani demonstruese. Për të marrë cilësimet, ju lutemi blini versionin tonë pro. Ne rregull Ne rregull Të tjerët (Çdo direktori tjetër që gjendet brenda përmbajtjes wp) Të tjerët rezervimin e bërë në datën  Rezervimet e tjera u rikuperuan me sukses. Versioni PHP Parametrat: Ngjit një skedar ose dosje Ju lutemi shkruani adresën e postës elektronike. Ju lutemi shkruani emrin. Ju lutemi shkruani emrin e modelit. Ju lutemi ndryshojeni këtë me kujdes, rruga e gabuar mund të çojë shtojcën e menaxherit të skedarit. Shtojca Rezervimi i shtojcave është bërë në datë  Rezervimi i shtojcave u rikuperua me sukses. Posto madhësinë maksimale të ngarkimit të skedarit (post_max_size) Preferencat Politika e privatësisë Rruga e Rrënjës Publike RISHIKON DOSJAT Hiqni ose fshini skedarët dhe dosjet Riemërtoni një skedar ose dosje Rikthe SUKSES Ruaj ndryshimet Po kursen ... Kërkoni gjëra Selektoj të gjitha Cilësimet Cilësimet - Redaktuesi i kodit Cilësimet - Të përgjithshme Cilësimet - Kufizimet e Përdoruesit Cilësimet - Kufizimet e rolit të përdoruesit Cilësimet u ruajtën. Kodi i shkurtër - PRO Thjesht prerë një skedar ose dosje Karakteristikat e sistemit Kushtet e shërbimit Rezervimi me sa duket pati sukses dhe tani është i plotë. Temat Rezervimi i temave u bë në datë  Rezervimi i temave u rikuperua me sukses. Koha tani Koha e ndërprerjes (max_execution_time) Për të bërë një arkiv ose zip Sot P USRDORIMI: Rezervimi nuk mund të hiqet! Nuk mund të rikuperohet rezervimi i DB. Në pamundësi për të rivendosur të tjerët. Nuk mund të rikthehet shtojcat. Nuk mund të rikthehen temat. Nuk mund të rikthehen ngarkimet. Ngarko Dosjet e Skedarëve Ngarko skedarët Ngarkimet Rezervimet e ngarkimeve bëhen në datë  Rezervimi i ngarkimeve u restaurua me sukses. Verifiko Shiko Regjistrin WP File Manager WP File Manager - Rezervimi / Rikuperimi Kontributi i WP File Manager Na pëlqen të krijojmë miq të rinj! Abonohuni më poshtë dhe ne premtojmë të
    ju mbajmë të azhurnuar me shtojcat, azhurnimet tona më të fundit,
    marrëveshje të mrekullueshme dhe disa oferta speciale. Mirësevini në File Manager Ju nuk keni bërë asnjë ndryshim për t'u ruajtur. 