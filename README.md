Este módulo usa o timthumb.php uma biblioteca para gerar thumbnails de imagem on the fly.

Site Oficial da Biblioteca

http://code.google.com/p/timthumb/

# Exemplo de uso

    timthumb/?src=upload/image.jpg&w=100&h=100&zc=1
    
    //timthumb é um controller dentro do diretório classes do módulo
    
você pode mudar o nome do controller para o nome desejado fazendo um extends do timthumb

    class Thumb extends Timthumb{}

E ultilizar de maneira semelhante:
    
    thumb/?src=upload/image.jpg&w=100&h=100&zc=1



[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/madeinnordeste/kohana-timthumb/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

