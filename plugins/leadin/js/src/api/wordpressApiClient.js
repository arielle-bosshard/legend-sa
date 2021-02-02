import $ from 'jquery';

import Raven from '../lib/Raven';
import { restNonce, restUrl } from '../constants/leadinConfig';

function makeRequest(method, path) {
  const restApiUrl = `${restUrl}leadin/v1${path}`;

  return new Promise((resolve, reject) => {
    $.ajax({
      url: restApiUrl,
      method,
      contentType: 'application/json',
      beforeSend: xhr => xhr.setRequestHeader('X-WP-Nonce', restNonce),
      success: resolve,
      error: error => {
        Raven.captureMessage(
          `HTTP Request to ${restApiUrl} failed with error ${error.status}: ${error.responseText}`
        );
        reject(error);
      },
    });
  });
}

export function makeProxyRequest(method, hubspotApiPath) {
  const proxyApiPath = `/proxy${hubspotApiPath}`;

  return makeRequest(method, proxyApiPath);
}

export function healthcheckRestApi() {
  return makeRequest('get', '/healthcheck');
}
