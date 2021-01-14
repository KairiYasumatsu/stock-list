# 開発環境構築

## docker-laravelを使用しているので、docker-laravelについては下記参照🐳
* https://qiita.com/ucan-lab/items/5fc1281cd8076c8ac9f4

## 開発環境構築
### docker立ち上げ
```sh
[mac]$ git clone git@github.com:KairiYasumatsu/stock-list.git
[mac]$ docker-compose up -d build
```

### yarn
```sh
[mac] $ docker-compose exec web yarn
[mac] $ docker-compose exec web yarn dev
[mac] $ docker-compose exec web yarn watch
```

### Hello reactが表示されればおっけい
* http://127.0.0.1:10080/