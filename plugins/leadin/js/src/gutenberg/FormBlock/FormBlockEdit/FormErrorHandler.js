import React from 'react';
import UIButton from '../../UIComponents/UIButton';
import UIContainer from '../../UIComponents/UIContainer';
import GutenbergWrapper from '../../Common/GutenbergWrapper';
import { i18n, adminUrl } from '../../../constants/leadinConfig';

function redirectToPlugin() {
  window.location.href = `${adminUrl}/admin.php?page=leadin`;
}

export default function FormErrorHandler({ status }) {
  const isUnauthorized = status === 401;
  const errorMessage = isUnauthorized
    ? i18n.unauthorizedMessage
    : i18n.formApiError;

  return (
    <GutenbergWrapper>
      <UIContainer textAlign="center">
        <p>
          <b>{errorMessage}</b>
        </p>
        {isUnauthorized && (
          <UIButton onClick={redirectToPlugin}>{i18n.goToPlugin}</UIButton>
        )}
      </UIContainer>
    </GutenbergWrapper>
  );
}
