public function actionSaveForm()
{
    $request = Craft::$app->getRequest();

    $fahrzeugdaten = $request->getBodyParam('fahrzeugdaten');
    $marke = $request->getBodyParam('marke');
    $kilometerstand = $request->getBodyParam('kilometerstand');
    $erstzulassung = $request->getBodyParam('erstzulassung');
    $preis = $request->getBodyParam('preis');
    $kraftstoff = $request->getBodyParam('kraftstoff');
    $zustand = $request->getBodyParam('zustand');

    $session = Craft::$app->getSession();

    $session->set('formData', [
        'fahrzeugdaten' => $fahrzeugdaten,
        'marke' => $marke,
        'kilometerstand' => $kilometerstand,
        'erstzulassung' => $erstzulassung,
        'preis' => $preis,
        'kraftstoff' => $kraftstoff,
        'zustand' => $zustand,
    ]);

    return $this->redirectToPostedUrl();
}