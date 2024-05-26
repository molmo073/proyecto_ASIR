<?php
$cfg['Servers'][1]['host'] = '172.30.0.3'; // La dirección IP del contenedor MySQL
$cfg['Servers'][1]['port'] = '3306';
$cfg['Servers'][1]['socket'] = '';
$cfg['Servers'][1]['connect_type'] = 'tcp';
$cfg['Servers'][1]['extension'] = 'mysqli';
$cfg['Servers'][1]['compress'] = false;
$cfg['Servers'][1]['auth_type'] = 'cookie';

/* Usuario y contraseña de MySQL */
$cfg['Servers'][1]['user'] = 'adminmysql'; // Usuario de MySQL
$cfg['Servers'][1]['password'] = 'mmb1932&'; // Contraseña de MySQL

/* Características opcionales */
$cfg['Servers'][1]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][1]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][1]['relation'] = 'pma__relation';
$cfg['Servers'][1]['table_info'] = 'pma__table_info';
$cfg['Servers'][1]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][1]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][1]['column_info'] = 'pma__column_info';
$cfg['Servers'][1]['history'] = 'pma__history';
$cfg['Servers'][1]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][1]['tracking'] = 'pma__tracking';
$cfg['Servers'][1]['designer_coords'] = 'pma__designer_coords';
$cfg['Servers'][1]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][1]['recent'] = 'pma__recent';
$cfg['Servers'][1]['favorite'] = 'pma__favorite';
$cfg['Servers'][1]['users'] = 'pma__users';
$cfg['Servers'][1]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][1]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][1]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][1]['central_columns'] = 'pma__central_columns';

/* Ruta para el directorio de carga de archivos */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
