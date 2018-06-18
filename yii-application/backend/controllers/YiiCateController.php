<?php

namespace backend\controllers;

use Yii;
use backend\models\YiiCate;
use backend\models\YiiCateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * YiiCateController implements the CRUD actions for YiiCate model.
 */
class YiiCateController extends Controller
{
    public $layout = "main-backend";

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all YiiCate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YiiCateSearch();
        $data = array_merge(Yii::$app->request->queryParams, ['type' => 0]);
        $dataProvider = $searchModel->search($data);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all YiiCate models.
     * @return mixed
     */
    public function actionHome()
    {
        $searchModel = new YiiCateSearch();
        $data = array_merge(Yii::$app->request->queryParams, ['type' => 2]);
        $dataProvider = $searchModel->search($data);

        return $this->render('home', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single YiiCate model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new YiiCate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new YiiCate();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect([$model->type == 0 || $model->type == 2 ? 'index' : 'home']);
        }

        return $this->render($model->type == 0 || $model->type == 2 ? 'create' : 'page', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing YiiCate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect([$model->type == 0 || $model->type == 2 ? 'index' : 'home']);
        }

        return $this->render($model->type == 0 || $model->type == 2 ? 'update' : 'edit', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing YiiCate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the YiiCate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return YiiCate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = YiiCate::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
