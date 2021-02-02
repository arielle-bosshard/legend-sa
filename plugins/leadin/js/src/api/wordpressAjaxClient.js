import $ from 'jquery';

import Raven from '../lib/Raven';
import { ajaxUrl, nonce } from '../constants/leadinConfig';

function makeAjaxRequest(action, method, payload) {
  const url = `${ajaxUrl}?action=${action}&_ajax_nonce=${nonce}`;
  return new Promise((resolve, reject) => {
    const ajaxPayload = {
      url,
      method,
      contentType: 'application/json',
      success: data => resolve(data),
      error: error => {
        Raven.captureMessage(
          `HTTP request ${action} failed with code ${error.status}: ${error.message}`
        );
        reject(error);
      },
    };

    if (payload) {
      ajaxPayload.data = JSON.stringify(payload);
    }

    $.ajax(ajaxPayload);
  });
}

export function postAjax(action, payload) {
  return makeAjaxRequest(action, 'post', payload);
}

export function leadinConnectPortal(portalInfo) {
  return postAjax('leadin_registration_ajax', portalInfo);
}

export function leadinDisconnectPortal() {
  return postAjax('leadin_disconnect_ajax', {});
}

export function skipSignup(defaultApp) {
  return postAjax('leadin_skip_signup', { defaultApp });
}
