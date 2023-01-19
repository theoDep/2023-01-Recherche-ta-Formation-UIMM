import React from "react";
import Card from "react-bootstrap/Card";

export default ({ training }) => {
  const { title, description, level } = training;
  return (
    <Card>
      <Card.Header>{level}</Card.Header>
      <Card.Body>
        <Card.Title>{title}</Card.Title>
        <Card.Text>{description}</Card.Text>
      </Card.Body>
    </Card>
  );
};
