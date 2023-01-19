import React from "react";
import Card from "react-bootstrap/Card";

export default ({ training }) => {
  const { title, description, level } = training;
  return (
    <Card className="m-3 w-25">
      <Card.Header>{level}</Card.Header>
      <Card.Body>
        <Card.Title>{title}</Card.Title>
        <Card.Text>{description}</Card.Text>
      </Card.Body>
    </Card>
  );
};
