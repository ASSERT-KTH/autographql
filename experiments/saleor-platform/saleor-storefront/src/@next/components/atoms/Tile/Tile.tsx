import React from "react";

import * as S from "./styles";
import { IProps } from "./types";

export const Tile: React.FC<IProps> = ({
  header,
  children,
  footer,
  ...props
}: IProps) => {
  return (
    <S.Wrapper {...props}>
      {header && (
        <S.Header>
          <S.Content>{header}</S.Content>
        </S.Header>
      )}
      <S.Content>{children}</S.Content>
      {footer && <S.Footer>{footer}</S.Footer>}
    </S.Wrapper>
  );
};
