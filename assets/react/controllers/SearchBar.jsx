import React from "react";

import Button from "react-bootstrap/Button";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";

export default ({ search, handleSubmit, handleChange }) => {
  return (
    <>
      <Form onSubmit={handleSubmit} className="w-50 m-auto">
        <InputGroup className="mt-3 mb-5">
          <Form.Control type="text" className="searchBar bg-white" onChange={handleChange} value={search} />
          <Button variant="outline-primary" type="submit">
            Rechercher
          </Button>
        </InputGroup>
      </Form>
    </>
  );
};
