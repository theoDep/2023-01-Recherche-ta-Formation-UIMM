import React from "react";

import Button from "react-bootstrap/Button";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

export default ({ search, handleSubmit, handleChange }) => {
  return (
    <>
      <Form onSubmit={handleSubmit}>
        <InputGroup className="mb-3">
          <Form.Control type="text" onChange={handleChange} value={search} />
          <Button variant="outline-secondary" type="submit">
            Rechercher
          </Button>
        </InputGroup>
      </Form>
    </>
  );
};
