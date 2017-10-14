import numpy as np
import pandas as pd
import pymysql
import pickle
from sklearn import preprocessing, metrics
from sklearn.model_selection import train_test_split
from sklearn.naive_bayes import GaussianNB

mysql_cn= pymysql.connect(host='localhost', 
                port=3306,user='root', passwd='', 
                db='kiki')
bayes_df = pd.read_sql("SELECT * FROM tbl_data;", con=mysql_cn)
mysql_cn.close()


def preprocess_bayes_df(df):
    processed_df = df.copy()
    le = preprocessing.LabelEncoder()
    # processed_df.sex = le.fit_transform(processed_df.j_k)
    #processed_df.j_k = le.fit_transform(processed_df.j_k)
    processed_df = processed_df.drop(["id_customer", "nama_cust","alamat","no_hp"],axis=1)
    # age_prescaling = processed_df["age"].values #returns a numpy array
    # min_max_scaler = preprocessing.MinMaxScaler()
    # age_scaled = min_max_scaler.fit_transform(processed_df)
    # processed_df["age"] = age_scaled
    return processed_df

processed_df = preprocess_bayes_df(bayes_df)


X = processed_df.drop(["status_kelayakan"], axis=1).values
y = processed_df["status_kelayakan"].values

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)


gnb = GaussianNB()
gnb.fit(X_test, y_test).predict(X_test)

predicted = gnb.predict(X_test)
print(predicted)
print("=============")
print(y_test)

print("accuracy =  ",metrics.accuracy_score(y_test, predicted))

pickle.dump( gnb, open( "bayes.p", "wb" ) )