import React from "react";
import { forwardRef } from "react";

import Button from "react-bootstrap/Button";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

export default forwardRef(({ search, handleSubmit, handleChange }, ref) => {
  return (
    <>
      <Form onSubmit={handleSubmit} className="w-75 w-lg-50 m-auto">
        <InputGroup className="mt-3 mb-5">
          <Form.Control
            type="text"
            className="searchBar bg-white"
            onChange={handleChange}
            value={search}
            ref={ref}
          />
          <Button variant="outline-primary" type="submit">
            Rechercher
          </Button>
        </InputGroup>
      </Form>
    </>
  );
});
