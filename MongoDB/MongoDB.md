# MongoDB

>非关系性数据库
>
>文档型数据库，所谓文档是一种类似于JSON的结构，简单就是MongoDB存的是各种各样的JSON（BSON)
>
>为快速开发互联网Web应用而设计的数据库系统
>
>官方偶数版本为稳定版，奇数为开发版

***

### 一、安装

见同级文件夹mongodb安装.txt

* mongod用来启动MongoDB服务器
* mongo用来启动MongoDB客户端
* 启动命令：mongod --dbpath C:\Tool\MongoDB\data\db --port 10086
* 也可以配置为Windows服务自启动,具体见mongodb安装.txt

***

### 二、基本概念

1. 数据库(database):数据库是一个仓库,在仓库中可以存放集合
2. 集合(collection):集合类似于数组,在集合中可以存放文档
3. 文档(document):文档数据库中最小单位,我们存储和操作的内容都是文档

* 注意：mongodb中数据库和集合都不需要手动创建

  当我们创建文档时，如果文档所在的集合或数据库不存在会***<u>自动创建</u>***数据库和集合

***

### 三、使用操作

#### 1、基本操作指令

* show dbs	或者    show databases
  * 显示当前的所有数据库
* use xxx（数据库名） 
  * 使用xxx数据库
* db
  * 查看当前所在数据库，会返回数据库名
* show collections
  * 查看所在数据库中的集合，返回集合名称

#### 2、增删改查

##### (1)**增**

* db.<collection>.insert(xxx)		**插入一条**
  * db代表当前数据库
  * <collection>代表集合,所以应该用实际的集合名称代替此项
  * xxx是插入的内容
  * 例子: 向test数据库中的student集合中插入一个新的学生对象
  * db.student.insert({name:"chuxiaokai",age:24,gender:"male"})
  * 例子:db.student.insert（ {  "_id" : ObjectId("5c7bcdf72760fe5fbe6d33f9"),  "name" : "chuxiaokai",  "age" : 24,  "gender" : "male"}）
  * 插入时: _id可以自己指定，但是不建议，直接使用系统的ObjectId就可以

* db.<collection>.insert([{xxx}{xxx}{xxx}{xxx}{xxx}{xxx}])            **插入多条**

* 为了命令可读性强:

  ​	db.<collection>.insertOne()		插入一条,()中只有一个json串

  ​	db.<collection>.inserMany()		插入多条,()中是多个json串的数组

##### (2)**删**

* db.<collection>.remove(xxx)
  * 默认删除所有查询到的所有对象
  * db.<collection>.remove(xxx,**true**)    true时只会删除一个,第二个参数默认为false,会删除所有查询到的文档
  * db.<collection>.remove({})    清空集合(性能略差)
  * db.<collection>.drop()              清空集合,也会删除集合对应的库(性能好)
  * db.dropDatabase()                   删除数据库
* db.<collection>.deleteOne(xxx)
  * 删除查询到的第一个对象
* db.<collection>.deleteMany(xxx)
  * 删除查询到的所有对象

##### (3)**改**

* db.<collection>.update(查询条件，新对象)		根据查询条件使用新对象**替换**查询到的对象(**一般不用**)，默认只改查询到的第一条
  * 修改查询到的所有对象
  * 例子：db.student.update({name:"chuxiaokai"},{age:88})

* db.<collection>.update(查询对象，{$set:新对象})         

  * 只修改新对象里边设定的内容项,不会全部替换 ，默认只改查询到的第一条,可以通过参数修改查询到的所有对象

    ```mongodb
    update用法:
    db.<collection>.update(
    	<query>,
    	<update>,
    	{
    		upset:<boolean>,
    		multi:<boolean>,	//默认为false,只修改查询到的第一条,update时指定该字段为true则修改查询到的所有对象
    		writeConcern:<document>,
    		collection:<document>
    	}
    )
    ```

  * $set   可以用来修改文档中的指定属性

  * $unset    可以用来删除文档的指定属性

  * 例子:  db.student.update({name:"chuxiaokai"},{$set{address:"beijingfangshan888号jiedao8888lou",gender:"female"}})

  * 例子:  db.student.update({name:"chuxiaokai"},{$set{gender:"female"}})

* db<collection>.updateOne((查询对象，{$set:新对象})

  * 只修改查询到的第一个对象

* db<collection>.updateMany((查询对象，{$set:新对象})

  * 修改查询到的所有对象

* db.<collection>.replaceOne()

##### (4)**查**

* db.<collection>.find()	查询集合中所有符合条件的文档,返回的是一个数组

* db.<collection>.find(xxx)      ()中可以指定一个json字符串对象作为查询条件,返回的是一个数组

  * 例子: db.student.find({name:"chuxiaokai",age:18})

* 为了命令的可读性:

  ​	db.<collection>.findOne(xxx)		返回的是一个对象json串,只返回查询到的第一个符合条件的文档对象

  ​	db.<collection>.find(xxx).count()	查询符合xxx条件的对象个数

  ​	db.<collection>.find(xxx).length()	查询符合xxx条件的对象个数

***

### 四、文档关系与练习

#### 1、文档之间的关系

* 一对一

  * 例子：db.wifeAndHusband.insert （[

    ​	{ 

    ​		 "name" : "黄蓉",

    ​		 "husband": {

    ​			"郭靖"

    ​		}

    ​	},

    ​	{ 

    ​		 "name" : "潘金莲",

    ​		 "husband": {

    ​			"武大郎"

    ​		}

    ​	}

    ]）

* 一对多

  * 例子：db.wifeAndHusband.insert （{ 

    ​		 "文章" : "褚老的一生",

    ​		 "评论": [

    ​			{

    ​				"名字":张三"

    ​				"内容":"棒呆!"

    ​			},

    ​			{

    ​				"名字":李四"

    ​				"内容":"博眼球!"

    ​			},

    ​			{

    ​				"名字":王五"

    ​				"内容":"什么鬼文章!"

    ​			}

    ​	})

  * 例子：db.users.insert([{

    ​			username:"swk"

    ​		},{

    ​			usename:"zbj"

    ​	}]);

    ​	   db.order.insert({

    ​		list:["橘子","香蕉"],

    ​		user_id: ObjectId("孙悟空的user_id属性值")

    ​	});

    ​	查找用户swk的订单:

    ​	var user_id = db.users.findOne({username:"swk"})._id;

    ​	db.order.find({user_id:user_id});

* 多对多

  * 例子：db.users.insert([

    ​			{name:"洪七公"},

    ​			{name:"黄药师"},

    ​			{name:"老顽童"}

    ​	]);

    ​	    db.stus.insert([

    ​		{

    ​			name:"**郭靖**",

    ​			tech_ids:[

    ​				ObjectId("**洪七公**的id"),

    ​				ObjectId("黄药师的id")

    ​			]

    ​		},{

    ​			name:"**黄蓉**",

    ​			tech_ids:[

    ​				ObjectId("**洪七公**的id"),

    ​				ObjectId("老顽童的id")

    ​		}

    ​	]);

#### 2、练习1.2.3

​	见外侧 练习文件夹中的练习1.js、练习2.js、练习3.js

#### 3、sort和投影

* sort

  * 默认情况下按照_id排序,也就是按照创建的时间排序,升序
  * find().sort()可以用来指定文档排序的级别,sort()需要传递一个对象来指定排序级别        **1:升序   -1:降序**
  * 例子: db.emp.find({}).sort({sal:1,empno:-1});

* 投影

  * find()查询时,可以在第二个参数的位置来设置查询结果的投影        1:显示  0: 不显示

  * 例子: db.emp.find({},{ename:1,_id:0,sal:1});

    ​	    查询结果只显示ename和sal两项,_id默认都会显示,_id:0表示不显示

***

### 五、Mongoose

#### 1、简介

​	Mongoose就是一个让我们可以通过Node来惭怍MongDB的模块

​	Mongoose是一个文档模型（ODM）库，它对原生的MongDB模块进行了进一步的优化封装，并提供了更多的功能

​	在大多数情况下，它被用来把结构化的模式应用到一个MongoDB集合，并提供了验证和转换等好处

​	可以为文档创建一个模式结构（Schema），约束

​	mongoose提供了几个新的对象：

* Schema（模式对象）
  * Schema对象定义了约束数据库中的文档结构
* Model
  * Model对象作为集合中所有文档的表示，相当于MongDB数据库中的集合collection
* Document
  * Document表示集合中的具体文档，相当于集合中的一个具体文档

#### 2、具体使用

1. mongoose的下载和连接以及基本的open、close事件

   * 下载的mongoose包是外侧文件夹mongoose文件夹中的node_modules


   * 见外侧mongoose文件夹中的01.helloMongoose.js

2. Schema和Model入门使用

   * 见外侧mongoose文件夹中的02.mongoose_demo.js

3. Model的具体方法

   * 见外侧mongoose文件夹中的03.model.js

4. Document的具体方法

   * 见外侧mongoose文件夹中的04.document.js

