<?php 
 
 
       /**
       * sınıf dosyasını çağırma include src/image.php
       * sınıfı oluşturma : $image = new image($_FILES['file'])
       * $image->setNewFileName(@param $yenisim) bu fonksiyon ile dosyaya atanacak yeni dosya ismini belirtebilirsiniz ,Not: kullanmassanız rastgele bir değer atanır
       * $image->setFile(@param $dosyayolu) bu fonksiyon ile resmin yükleneceği dosyayı belirtebilirsiniz örnek $image-setFile("yükleme") , Not: kullanmassanız "uploads" olarak atanır
       * $image->uploadFile() bu fonksiyon yükleme işlemi yapar
       * $image->returnPath() bu fonksiyon dosyanın bulunduğu konumu verir(@return)
       * $image->copy() bu fonksiyon yüklenen dosyayı kopyalar
       * $image->setImageStringOptions( @param $yaziboyutu,@param $soldanboşluk,@param $sağdanboşluk) belirtilen parametreleri imageString fonksiyonunda kullanmak üzere atama yapar
       * $image->imageString(@param $yazi) bu fonksiyon dosyaya yazı yazma işlemi yapar işlemi yapar.  Not: yazılacak yazıyı parametre olarak değilde $image->setString(@param $yazi) ilede belirtebilirsiniz
       * $image->imageRotate(@param $açı)   resmi girilen açı derecesinde döndürür
       * $image->imageCompress(@param $kalite) resmi 1-100 arasında girilen kaliteye göre sıkıştırır
       * $image->reSize(@param $genislik,@param $yukseklilk) bu fonksiyon resmi girilen genişlik ve yükseklik değerine göre yeniden boyutlandırır.
       * reSize de "40%","50%" gibi yüzdeli ifadelerde kullanılabilir
       * Not: bu class da zincirleme yapı kullanılabilir; örnek
       * $yol =  $image->setNewFileName("yeni dosya adı")->setFile("upload")->imageRotate(90)->reSize(400,500)->setImageStringOptions(3,15,10)->imageString("yaz yaz")->imageCompress(90)->returnPath()
       * yukardaki kodun döngüsü tüm bu işlemler yapıldıkdan sonraki konumudur.
       * oluşan hatayı yazdırma echo $image->errorInfo;
       */

 
?>