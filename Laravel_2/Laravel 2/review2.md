# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">

### findメソッドの引数に指定しているIDは何のIDか
パラメータで受け取ったid

### findメソッドで実行しているSQLは何か
SELECT * FROM todos WHERE id = $id

### findメソッドで取得できる値は何か
 対象のidのレコード

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
idが存在するかどうか。idが存在しなければ、INSERT。idが存在すればUPDATE。

## Todo論理削除

### traitとclassの違いとは
- クラスの継承とは異なり1つのクラスに複数のトレイトを追加できる
- トレイト自体はインスタンス化できない

### traitを使用するメリットとは
複数のクラス間でコードを共通化・再利用することが可能

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
Todoのクラスをインスタンス化するとき

### RequestクラスからFormRequestクラスに変更した理由
バリデーションを行うクラスを使用したいため
Requestが継承されるため問題ない

### $errorsのhasメソッドの引数・返り値は何か
入力欄のname属性

### $errorsのfirstメソッドの引数・返り値は何か
入力欄のname属性

### フレームワークとは何か
すでに用意された枠組みに肉付けするだけで誰でも一定品質のプロダクトを作成できるようになるもの

### MVCはどういったアーキテクチャか
model,view,controller
開発効率を高めるために作られた構造

### ORMとは何か、またLaravelが使用しているORMは何か
ORMとは、プログラミング言語のClassとデータベースのテーブルをマッピング(関連付け)することでSQLを直接操作することなくデータベースとマッピングされたClassのメソッドを用いることでDBとやり取りを行うことができる。
Laravelでは、データベースのテーブルとマッピングするClassがModelにあたる。

### composer.json, composer.lockとは何か
PHPパッケージ管理ソフト
- composer.json:PHPプロジェクトの依存関係を定義するファイル
- composer.lock:composer.jsonに記載された依存関係を元に実際にインストールされたパッケージとそのバージョンを固定するファイル

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendorディレクトリ
