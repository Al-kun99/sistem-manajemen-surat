
<?php

        echo '
        <style type="text/css">
            table {
                background: #fff;
                padding: 5px;
            }
            tr, td {
                border: table-cell;
                border: 1px  solid #444;
            }
            tr,td {
                vertical-align: top!important;
            }
            #right {
                border-right: none !important;
            }
            #left {
                border-left: none !important;
            }
            .isi {
                height: 300px!important;
            }
            .disp {
                text-align: center;
                padding: 1.5rem 0;
                margin-bottom: .5rem;
            }
            .logodisp {
                float: left;
                position: relative;
                width: 110px;
                height: 110px;
                margin: 0 0 0 1rem;
            }
            #lead {
                width: auto;
                position: relative;
                margin: 25px 0 0 75%;
            }
            .lead {
                font-weight: bold;
                text-decoration: underline;
                margin-bottom: -10px;
            }
            .tgh {
                text-align: center;
            }
            #nama {
                font-size: 2.1rem;
                margin-bottom: -1rem;
            }
            #alamat {
                font-size: 16px;
            }
            .up {
                text-transform: uppercase;
                margin: 0;
                line-height: 2.2rem;
                font-size: 1.5rem;
            }
            .status {
                margin: 0;
                font-size: 1.3rem;
                margin-bottom: .5rem;
            }
            #lbr {
                font-size: 20px;
                font-weight: bold;
            }
            .separator {
                border-bottom: 2px solid #616161;
                margin: -1.3rem 0 1.5rem;
            }
            @media print{
                body {
                    font-size: 12px;
                    color: #212121;
                }
                nav {
                    display: none;
                }
                table {
                    width: 100%;
                    font-size: 12px;
                    color: #212121;
                }
                tr, td {
                    border: table-cell;
                    border: 1px  solid #444;
                    padding: 8px!important;

                }
                tr,td {
                    vertical-align: top!important;
                }
                #lbr {
                    font-size: 20px;
                }
                .isi {
                    height: 200px!important;
                }
                .tgh {
                    text-align: center;
                }
                .disp {
                    text-align: center;
                    margin: -.5rem 0;
                }
                .logodisp {
                    float: left;
                    position: relative;
                    width: 80px;
                    height: 80px;
                    margin: .5rem 0 0 .5rem;
                }
                #lead {
                    width: auto;
                    position: relative;
                    margin: 15px 0 0 75%;
                }
                .lead {
                    font-weight: bold;
                    text-decoration: underline;
                    margin-bottom: -10px;
                }
                #nama {
                    font-size: 20px!important;
                    font-weight: bold;
                    text-transform: uppercase;
                    margin: -10px 0 -20px 0;
                }
                .up {
                    font-size: 17px!important;
                    font-weight: normal;
                }
                .status {
                    font-size: 17px!important;
                    font-weight: normal;
                    margin-bottom: -.1rem;
                }
                #alamat {
                    margin-top: -15px;
                    font-size: 13px;
                }
                #lbr {
                    font-size: 17px;
                    font-weight: bold;
                }
                .separator {
                    border-bottom: 2px solid #616161;
                    margin: -1rem 0 1rem;
                }

            }
        </style>

        <body onload="window.print()">

        <!-- Container START -->
            <div id="colres">
                <div class="disp">';
                        echo '<h4><img src="asset/img/logo1.png" width="50px"></h4>';
                        echo '<h2 class="up"><b>PERSANDIAN dan KEAMANAN INFORMASI</b></h4>';
                        echo '<h2 class="up" ><b>Dinas Komunikasi dan Informatika Provinsi Jawa Tengah</b></h3><br/>';

                    echo '
                </div>
                <div class="separator"></div>';
                $id_surat_keluar = mysqli_real_escape_string($link, $_REQUEST['id_surat_keluar']);
                $query = mysqli_query($link, "SELECT * FROM surat_keluar WHERE id_surat_keluar='$id_surat_keluar'");

                if(mysqli_num_rows($query) > 0){
                $no = 0;
                $bulan = date('n');
                $tahun = date('y');

                while($row = mysqli_fetch_array($query)){

                echo '
                    <table class="bordered" id="tbl">
                        <tbody>
                            <tr>
                                <td class="tgh" id="lbr" colspan="5">LEMBAR PENGANTAR SURAT KELUAR</td>
                            </tr>
                            <tr>
                                <td id="right" width="12%"><strong>No. Surat</strong></td>
                                <td id="left" style="border-right: none;" width="55%">: '."KKB/".$row['nomor_surat_keluar']."/SAN/".$bulan."/".$tahun.'</td>

                            </tr>
                            <tr><td id="right"><strong>Tgl Surat Keluar</strong></td>
                                <td id="left" colspan="3">: '.($row['tanggal_surat_keluar']).'</td>
                            </tr>
                            <tr><td id="right"><strong>Jam Surat Keluar</strong></td>
                                <td id="left" colspan="3">: '.($row['jam_surat_keluar']).'</td>
                            </tr>
                            <tr>
                                <td naid="right"><strong>No. Surat</strong></td>
                                <td id="left" colspan="3">: '.$row['nomor_berita'].'</td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Jumlah Hal</strong></td>
                                <td id="left" colspan="3">: '.$row['jumlah_lembar'].'</td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Jumlah Halvv</strong></td>
                                <td id="left" colspan="3">: '.$row['jumlah_lembar'].'</td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Dari</strong></td>
                                <td id="left" colspan="3">: '.$row['dari'].'</td>
                            </tr>
                            <tr>
                                <td id="right"><strong>Kepada</strong></td>
                                <td id="left" colspan="3">: '.$row['untuk'].'</td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <strong>Jam  | Tanggal </strong><br>'.date("H:i | d M Y ").'<br>
                                    <strong> Catatan : </strong>
                                </td>
                                <td align="center" valign="middle"><strong> '.$row['petugas'].'</strong> <br/>
                                <div style="height: 200px;"> </div>
                                 </td>
                            </tr>';
                                }
                            } 
                         echo '
                </tbody>
            </table>
    <!-- Container END -->

    </body>';



?>
