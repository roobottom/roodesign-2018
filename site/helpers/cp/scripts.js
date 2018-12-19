/* Custom Control Panel JavaScript... */
Statamic.conditions.moreThanOneAsset = function (fields) {
    return fields['assets'].length > 1;
};
