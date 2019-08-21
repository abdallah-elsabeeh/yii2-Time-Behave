# yii2 Unix Time Behave
php traits to implement unix time behavior and return the unit time to format date
its so simple traits to use as time behavior in yii2 model instead of re declare the time behave function every time
just call the traits useing (use keyword) and namespace 
you will find 2 trait file the first one function is to convert created_at and updated_at in formatted time the secound one is to 
decide how the time stamp behaves

#timeBehaviors
this class decide how the time stamp behaves

by default the trait defined the columns as created_at and updated_at you can easily change to your own name
also you can change the time formate to any format the class deffined by default the time as unix time 
-date('U');//the default time formate ( unix ) Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
you can get more time formated from http://php.net/manual/en/function.date.php


#unixTime
this trait to convert created_at and updated_at in formatted time
Y-m-d H:i

by default the trait convert the unix time to MySQL DATETIME format (2014-08-12 11:14:54)
also you can change the time formate to any format the class deffined by default the time as MySQL DATETIME format

#use any format
return gmdate("YOUR FORMATE HERE", $this->created_at);
