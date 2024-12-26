<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <a class="header__logo" href="/">
                    mogitate
                </a>
                <nav>
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link01" href="/register">＋商品を追加</a>
                            <a class="header-nav__link02" href="/search">検索</a>
                            <select class="price__item-select">
                                <option value="">価格で並べ替え</option>
                            </select>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    @foreach($products as $product)
    <div class="flex__item">
        <div class="product__card"></div>
        <div class="product__img">
            <img src="/storage/{{$product->image}}" alt="" />
        </div>
        <div class="product__name">
            {{$product->name}}
        </div>
        <div class="product__price">
            ￥{{$product->price}}
        </div>
    </div>
    </div>
    @endforeach
</body>

</html>