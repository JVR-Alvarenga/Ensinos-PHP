<?php

$arquivo = 'xboxImage.webp';    
$width = 200;        //largura da foto
$height = 200;       //altura da foto
$finalX = 0;    //definindo onde vai comecar no eixo X
$finalY = 0;    //definindo onde vai comecar no eixo Y

list($originalWidth, $originalHeight) = getimagesize($arquivo); //pegando informacoes da imagem

$ratio = $originalWidth / $originalHeight;      //definindo a proporcao da imagem origianal
$ratioDist = $width / $height;                  //definindo a proporcao da imagem destinataria

$finalWidth = 0;
$finalHeight = 0;

if($ratioDist > $ratio){
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
}else{
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width){
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    $finalY = -(($finalHeight - $height) / 2);    ////calculando a imagem para centralizar vertical
}else{
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);      //calculando a imagem para centralizar horizontal
}

$image = imagecreatetruecolor($width, $height);     //criando imagem
$originalImg = imagecreatefromwebp($arquivo);       //lendo a imagem enviada

imagecopyresampled(         //copiando imagem orinal e colocando as proporcoes 
    $image,
    $originalImg,
    $finalX, $finalY, 0, 0,
    $finalWidth, $finalHeight,
    $originalWidth, $originalHeight
);

header("Content-Type: image/jpeg");
imagejpeg($image, null , 100);      //mostrando imagem







