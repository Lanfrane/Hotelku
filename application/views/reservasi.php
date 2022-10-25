<section>
    <h1><?php echo $judul ?></h1>
    <center>  
        <form action="<?= base_url('Hotelku/print'); ?>" method="post"> 
            <table> 
                <tr align="left" > 
                    <th >NIK</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama" placeholder="Input NIK" size="30"> 
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Nama Lengkap</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Input Nama Lengkap" size="30"> 
                            
                    </td> 
                </tr>
                <tr align="left">
                <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 
                </tr>  
                <tr align="left"> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Input Alamat" size="30"> 
                           
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tipe</th> 
                    <th>:</th> 
                    <td>
                        <select name="tipekamar" id="tipekamar"> 
                        <option value="#">Tipe Kamar</option> 
                        <option value="Standard Room">Standard Room</option> 
                        <option value="Superior Room">Superior Room</option> 
                        <option value="Deluxe Room">Deluxe Room</option> 
                        <option value="Twin Room">Twin Room</option> 
                        <option value="Single Room">Single Room</option> 
                        <option value="Double Room">Double Room</option> 
                        <option value="Family Room">Family Room</option> 
                        <option value="Junior Suit">Junior Suit</option> 
                    </select> 
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tanggal checkin</th> 
                    <th>:</th> 
                    <td>
                        <input type="date" name="checkin" id="checkin" size="30"> 
                            
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Lama inap</th> 
                    <th>:</th> 
                    <td>
                    <input type="text" name="inap" id="inap" placeholder="Input Lama Inap" size="30"> 
                    </td> 
                </tr>
                
                <tr> 
                    <td colspan="3" align="center"><input type="submit" value="Simpan"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</section>