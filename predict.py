import numpy as np
import pandas as pd 
import lightgbm as lgb
import os, glob, sys



def build_model():
    #学習済みモデルの読みこみ
    model = lgb.Booster(model_file='D:\XAMPP\htdocs\pythontest\model.txt')
    return model 

def x_df():
    #データ読み込み
    df = pd.read_csv('D:\XAMPP\htdocs\pythontest\csvFolder\uploaded.csv')
    x = df.drop('count',axis=1).values
    return x

def main():
    x = x_df() #データ
    model = build_model()
    preds = model.predict(x)

    y_pred = []
    #予測値をargmaxでどのクラスか明示する

    for x in preds:
        y_pred.append(np.argmax(x))

    return y_pred

#予測値のlistを返して終了
main()